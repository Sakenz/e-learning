<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                <!-- Flex Container to Align Search Form and Create Course Modal Horizontally -->
                <div class="flex justify-between mb-4 items-center">

                    <!-- Search Form -->
                    <form method="GET" action="{{ route('courses') }}" class="flex items-center">
                        <input type="text" name="search" placeholder="Search by course name"
                               class="border border-gray-300 rounded-lg p-2 mr-2"
                               value="{{ request()->get('search') }}">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Search
                        </button>

                        <!-- Reset Button (Redirects to courses route without search) -->
                        <a href="{{ route('courses') }}"
                           class="bg-gray-300 hover:bg-gray-400 text-black font-bold py-2 px-4 rounded ml-2">
                            Reset
                        </a>
                    </form>

                    <!-- Create Course Modal Button -->
                    <livewire:create-course-modal />

                </div>


                <!-- Courses Table -->
                <table class="min-w-full table-auto border-collapse border border-gray-300">
                    <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">Course Number</th>
                        <th class="border border-gray-300 px-4 py-2">Course Name</th>
                        <th class="border border-gray-300 px-4 py-2">Course Description</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                        <th class="border border-gray-300 px-4 py-2">Page count</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($courses as $index => $course)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $index + 1 }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $course->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $course->description }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <a href="{{ route('courses.addPage', $course->id) }}" class="text-green-500 hover:text-green-700 mx-2">
                                    ➕
                                </a>
                                <a href="{{ route('course_pages.show', $course->id) }}" class="text-blue-500 hover:text-blue-700 mx-2">
                                    👁️
                                </a>
                            </td>
                            <td class="border border-gray-300 px-4 py-2"
                                {{}}
                            ></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="border border-gray-300 px-4 py-2 text-center">No courses found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
