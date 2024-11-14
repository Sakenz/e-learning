<div>
    <!-- Button to trigger modal -->
    <button wire:click="$set('open', true)" class="bg-blue-500 text-white py-2 px-4 rounded">
        Add New Page
    </button>

    <!-- Modal -->
    @if($open)
        <div class="fixed z-10 inset-0 overflow-y-auto" wire:ignore.self>
            <div class="flex items-center justify-center min-h-screen">
                <div class="bg-white rounded-lg p-6 max-w-lg w-full shadow-xl">
                    <h2 class="text-xl font-bold mb-4">Add New Page</h2>

                    <!-- Page Title -->
                    <div class="mb-4">
                        <label class="block text-gray-700">Enter Page Name</label>
                        <input type="text" wire:model="page_title" class="form-input w-full rounded" placeholder="Enter page name">
                        @error('page_title') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <!-- Page Content -->
                    <div class="mb-4">
                        <label class="block text-gray-700">Enter Page Content</label>
                        <textarea wire:model="page_content" class="form-input w-full rounded" rows="4" placeholder="Enter page content"></textarea>
                        @error('page_content') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <!-- Upload Image -->
                    <div class="mb-4">
                        <label class="block text-gray-700">Upload Image</label>
                        <input type="file" wire:model="image" class="form-input w-full">
                        @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <!-- Page Number -->
                    <div class="mb-4">
                        <label class="block text-gray-700">Enter Page Number</label>
                        <input type="number" wire:model="page_number" class="form-input w-full rounded">
                        @error('page_number') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-between mt-4">
                        <button wire:click="$set('open', false)" class="bg-gray-500 text-white py-2 px-4 rounded">
                            Close
                        </button>
                        <button wire:click="createPage" class="bg-blue-500 text-white py-2 px-4 rounded">
                            Create
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
