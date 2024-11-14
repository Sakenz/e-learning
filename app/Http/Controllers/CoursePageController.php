<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoursePage;
use App\Models\Course;

class CoursePageController extends Controller
{
    public function addPage(Course $course)
    {
        // Fetch all pages for the given course
        $pages = CoursePage::where('course_id', $course->id)->get();

        // Return a view with the course and its pages
        return view('course_pages', compact('course', 'pages'));
    }

    public function store(Request $request, Course $course)
    {
        // Validate the request data
//        $validated = $request->validate([
//            'page_title' => 'required|string|max:128',
//            'page_content' => 'required|string',
//            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//        ]);

        // Determine the next page number
        $nextPageNumber = $course->pages()->max('page_number') + 1;

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('course_pages', 'public');
            $validated['image'] = $imagePath;
        }

        // Create a new course page with course_id and the next page number
        $course->pages()->create([
            'page_title' => $validated['page_title'],
            'page_content' => $validated['page_content'],
            'image' => $validated['image'] ?? null,
            'page_number' => $nextPageNumber,
            'course_id' => $course->id,
        ]);

        return redirect()->route('courses.addPage', $course->id)->with('success', 'Page added successfully.');
    }


    public function create($courseId)
    {
        // Fetch the course by its ID to which the page will be added
        $course = Course::findOrFail($courseId);

        // Render a view and pass the course data
        return view('pages.create', compact('course'));
    }

    public function show($courseId, $pageId = null)
    {
        // Fetch the course
        $course = Course::with('pages')->findOrFail($courseId);

        if ($course->pages->isEmpty()) {
            return view('courses.play', [
                'course' => $course,
                'previousPage' => null,
                'nextPage' => null,
                'coursePage' => null,
            ]);
        }

        // Fetch the current page
        if ($pageId == null) {
            $coursePage = CoursePage::where('course_id', $courseId)
                ->orderBy('page_number', 'asc')
                ->firstOrFail();
        } else {
            $coursePage = CoursePage::where('course_id', $courseId)
                ->where('id', $pageId)
                ->firstOrFail();
        }

        // Get previous and next pages
        $previousPage = CoursePage::where('course_id', $courseId)
            ->where('page_number', '<', $coursePage->page_number)
            ->orderBy('page_number', 'desc')
            ->first();

        $nextPage = CoursePage::where('course_id', $courseId)
            ->where('page_number', '>', $coursePage->page_number)
            ->orderBy('page_number', 'asc')
            ->first();

        // Return the view with data
        return view('courses.play', compact('course', 'coursePage', 'previousPage', 'nextPage'));
    }
}
