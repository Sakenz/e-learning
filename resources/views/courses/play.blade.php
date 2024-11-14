<x-app-layout>
    {{-- Course Header --}}
    <div class="container mx-auto py-6 text-center">
        <h1 class="text-4xl font-bold mb-2">{{ $course->name }} Course</h1>
        <p class="text-gray-600">{{ $course->description }}</p>
    </div>

    <div class="container mx-auto my-4 flex justify-between items-center">
        <div class="flex">
            {{-- Previous Page Button --}}
            @if($previousPage)
                <a href="{{ route('course_pages.show', [$course->id, $previousPage->id]) }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded w-40 text-center">
                    Previous Page
                </a>
            @else
                <button class="bg-gray-300 text-white font-bold py-2 px-4 rounded cursor-not-allowed w-40 text-center" disabled>
                    Previous Page
                </button>
            @endif

            {{-- Next Page Button --}}
            @if($nextPage)
                <a href="{{ route('course_pages.show', [$course->id, $nextPage->id]) }}"
                   class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded w-40 text-center ml-4">
                    Next Page
                </a>
            @else
                <button class="bg-gray-300 text-white font-bold py-2 px-4 rounded cursor-not-allowed w-40 text-center ml-4" disabled>
                    Next Page
                </button>
            @endif
        </div>

        {{-- Exit Course Button --}}
        <a href="{{ route('courses') }}"
           class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
            Exit Course
        </a>
    </div>

    {{-- Main Content Area --}}
    @if (is_null($coursePage))
        <div class="container mx-auto flex justify-center items-center m-5 p-5">
            <h2 class="text-2xl font-semibold mb-4 text-center bg-blue-100 border-4 border-blue-300 py-2 px-6">
                There are no pages to show.
            </h2>
        </div>
    @else
        <div class="container mx-auto flex space-x-8">
            {{-- Sidebar --}}
            <div class="w-1/4 bg-gray-100 p-4 rounded-md">
                <h3 class="text-xl font-bold mb-4">Pages</h3>
                <ul class="space-y-2">
                    @foreach ($course->pages as $page)
                        <li class="flex justify-between items-center bg-white p-3 rounded-md shadow">
                            <span>{{ $page->page_number }}. {{ $page->page_title }}</span>
                            <a href="{{ route('course_pages.show', [$course->id, $page->id]) }}"
                               class="bg-blue-500 text-white font-bold py-1 px-3 rounded">
                                View
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Page Content --}}
            <div class="w-3/4 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4 text-center bg-blue-100 border border-blue-300 py-2">
                    {{ $coursePage->page_title }}
                </h2>


                {{-- Display Image if available --}}
                @if($coursePage->image)
                    <div class="mb-6 text-center">
                        <img src="{{ Storage::url($coursePage->image) }}" class="mx-auto rounded-md shadow w-full max-w-xl" alt="Page Image">
                    </div>
                @endif

                {{-- Page Content --}}
                <p class="text-gray-800">
                    {{ $coursePage->page_content }}
                </p>
            </div>
        </div>
    @endif
</x-app-layout>
