{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ $course->name }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">--}}
{{--                <h3 class="text-lg font-semibold mb-4">Pages in Course: {{ $course->name }}</h3>--}}

{{--                <p>Total Pages: {{ $course->pages->count() }}</p>--}}

{{--                <a href="{{ route('course_pages.create', $course->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">--}}
{{--                    Create New Page--}}
{{--                </a>--}}

{{--                @foreach($course->pages as $page)--}}
{{--                    <div class="border p-4 mb-4">--}}
{{--                        <h4 class="font-bold text-lg">Page Number: {{ $page->page_number }}</h4>--}}
{{--                        <h5 class="font-semibold">Page Title: {{ $page->page_title }}</h5>--}}
{{--                        @if($page->image)--}}
{{--                            <img src="{{ asset('storage/' . $page->image) }}" alt="Page Image" class="mt-2 mb-4">--}}
{{--                        @endif--}}
{{--                        <p>Page Content: {{ $page->page_content }}</p>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
