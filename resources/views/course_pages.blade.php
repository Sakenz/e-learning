<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pages in Course : ') . $course->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Display total pages -->
            <p>Total Pages: {{ $pages->count() }}</p>

            <!-- Button to create a new page -->
            <div class="flex justify-end mb-4">
                <a href="{{ route('course_pages.create', $course->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create New Page
                </a>
            </div>

            <!-- Loop through all pages and display them -->
            @foreach ($pages as $page)
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-8 border border-gray-300 p-6">
                    <p><strong>Page Number :</strong> {{ $page->page_number }}</p>
                    <p><strong>Page Title :</strong> {{ $page->page_title }}</p>

                    <!-- Display image if exists -->
                    @if ($page->image)
                        <p><strong>Image :</strong></p>
                        <img src="{{ asset('storage/' . $page->image) }}" alt="Page Image" class="w-64 h-auto">
                    @endif

                    <p><strong>Page Content :</strong> {{ $page->page_content }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
