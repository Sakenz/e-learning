<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Page for Course: ') . $course->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Modal form to add a new page -->
                <form action="{{ route('course_pages.store', $course->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="course_id" value="{{ $course->id }}">

                    <!-- Page Title -->
                    <div class="mb-4">
                        <label for="page-title" class="block text-gray-700">Enter Page Name</label>
                        <input type="text" name="page_title" class="form-input w-full rounded" placeholder="Page Title" required>
                    </div>

                    <!-- Page Content -->
                    <div class="mb-4">
                        <label for="page-content" class="block text-gray-700">Enter Page Content</label>
                        <textarea name="page_content" class="form-input w-full rounded" rows="4" placeholder="Page Content" required></textarea>
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700">Upload Image</label>
                        <input type="file" name="image" class="form-input w-full">
                    </div>

                    <!-- Page Number -->
{{--                    <div class="mb-4">--}}
{{--                        <label for="page-number" class="block text-gray-700">Page Number</label>--}}
{{--                        <input type="number" name="page_number" class="form-input w-full rounded" placeholder="Page Number" required>--}}
{{--                    </div>--}}

                    <!-- Modal Actions -->
                    <div class="flex justify-between mt-4">
                        <a href="{{ route('courses.show', $course->id) }}" class="bg-gray-500 text-white py-2 px-4 rounded">Cancel</a>
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
