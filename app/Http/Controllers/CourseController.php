<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CoursePage;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        // Fetch courses based on search query
        $courses = Course::where('name', 'like', '%' . $search . '%')   // Title search
            ->orWhere('description', 'like', '%' . $search . '%')   // Description search
            ->get();

        $coursePages= CoursePage::groupBy('course_id')->get();
        dd($coursePages);
        return view('courses', compact('courses'));
    }


    public function show(Course $course)
    {
        $course->load('pages');
        $pages = CoursePage::where('course_id', $course->id)->get();

        return view('course_pages', compact('course', 'pages'));
    }

}
