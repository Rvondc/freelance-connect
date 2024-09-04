<div>
    @if ($errors->any())
    <div class="fixed inset-0 flex items-center justify-center z-50" x-cloak>
        <div class="bg-white rounded-lg shadow-lg p-4 min-w-96">
            @foreach ($errors->all() as $error)
            <p class="text-red-500">{{ $error }}</p>
            @endforeach
            <button wire:click="resetErrors()" class="mt-4 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 focus:outline-none">
                Close
            </button>
        </div>
    </div>
    @endif

    <div class="bg-[#151922] w-[calc(100%-300px)] h-screen absolute">
        <div class="m-4 p-4 bg-[#303030] rounded flex h-[calc(100%-2rem)] relative">
            <div class="flex flex-col flex-1">
                <h1 class="text-2xl font-bold mb-4 text-white">Job <span class="text-green-400">Posting</span></h1>
                <label class="font-bold text-white" for="title">Title</label>
                <input wire:model="title" class="rounded-lg border-black border-2 px-3 py-2" id="title" type="text">

                <div class="my-1"></div>

                <label class="font-bold text-white" for="description">Description</label>
                <textarea wire:model="description" id="description" class="rounded-lg border-black border-2 px-3 py-2"></textarea>

                <div class="my-1"></div>

                <label class="font-bold text-white" for="deadline">Deadline</label>
                <input wire:model="deadline" class="rounded-lg border-black border-2 px-3 py-2" type="datetime-local" id="deadline">

                <div class="my-1"></div>

                <label class="font-bold text-white" for="deadline">Budget (PHP)</label>
                <input wire:model="budget" class="rounded-lg border-black border-2 px-3 py-2" type="number" step="1" min="1" id="deadline">
            </div>
            <div class="flex flex-col flex-1 p-4 mt-14">
                <div id="drop-zone" class="mb-3 flex flex-col bg-gray-800 items-center w-full h-40 p-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer hover:border-gray-400 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                    </svg>
                    <label for="file-input">
                        <span class="text-sm text-gray-300">Drop files here or <span class="text-blue-600 underline">browse</span></span>
                    </label>
                    <input wire:model="images" type="file" name="file_upload" class="sr-only" id="file-input" multiple accept="image/jpg,image/png,image/jpeg">
                </div>
                <div class="flex flex-wrap max-w-full justify-center">
                    @foreach ($images as $image)
                    <div class="max-w-24 max-h-24 mx-2 my-2 shadow shadow-black rounded">
                        <img class="aspect-square object-cover rounded" src="{{ $image->temporaryUrl() }}" alt="Image {{ $loop->index }}">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="absolute right-0 bottom-0 m-5 flex">
                <a class="font-semibold px-3 py-1 text-white" href="/client/dashboard" wire:navigate>Discard</a>
                <div class="mx-2"></div>
                <button wire:click="save()" class="text-white font-semibold bg-green-600 hover:bg-green-700 transition-all active:scale-110 rounded px-3 py-1">Upload</button>
            </div>
        </div>
    </div>
</div>