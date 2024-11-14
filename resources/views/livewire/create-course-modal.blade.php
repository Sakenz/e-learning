<div>
{{--    Trigger button  --}}
    <button wire:click="$toggle('showModal')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Create New Course
    </button>

{{--    Modal   --}}
    @if($showModal)
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen px-4">
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-lg">
                    <div class="bg-gray-50 px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Create New Course
                        </h3>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <form wire:submit.prevent="createCourse">
                            <div class="mb-4">
                                <label class="block text-gray-700">Enter Course Name</label>
                                <input type="text" wire:model="courseName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Course Name">
                                @error('courseName') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700">Enter Course Description</label>
                                <textarea wire:model="courseDescription" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="3" placeholder="Course Description"></textarea>
                                @error('courseDescription') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="flex justify-end">
                                <button type="button" wire:click="$toggle('showModal')" class="bg-gray-500 text-white px-4 py-2 rounded-lg mr-2">Close</button>
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
