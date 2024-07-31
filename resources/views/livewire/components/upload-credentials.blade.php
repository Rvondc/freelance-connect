<div>
    <form class="flex flex-wrap justify-center content-stretch gap-10">
        <div class="col-span-full w-96 min-w-72">
            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Front of ID</label>
            <div class="mt-2 h-full flex flex-col justify-start rounded-lg border border-dashed border-gray-900/25 {{ $front_id_image ? 'pb-10' : 'py-10' }}">
                @if ($front_id_image)
                <img class="rounded-t-lg aspect-video object-cover" src="{{ $front_id_image->temporaryUrl() }}" alt="Front">
                @endif
                <div class="text-center">
                    @if (!$front_id_image)
                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                    </svg>
                    @endif
                    <div class="mt-4 flex justify-center text-sm leading-6 text-gray-600">
                        <label for="front" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 hover:text-indigo-500">
                            <span>Upload a file</span>
                            <input wire:model="front_id_image" id="front" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                </div>
            </div>
        </div>

        <div class="col-span-full w-96 min-w-72">
            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Back of ID</label>
            <div class="mt-2 flex h-full flex-col justify-start rounded-lg border border-dashed border-gray-900/25 {{ $back_id_image ? 'pb-10' : 'py-10' }}">
                @if ($back_id_image)
                <img class="rounded-t-lg aspect-video object-cover" src="{{ $back_id_image->temporaryUrl() }}" alt="Back">
                @endif
                <div class="text-center">
                    @if (!$back_id_image)
                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                    </svg>
                    @endif
                    <div class="mt-4 flex justify-center text-sm leading-6 text-gray-600">
                        <label for="back" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 hover:text-indigo-500">
                            <span>Upload a file</span>
                            <input wire:model="back_id_image" id="back" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                </div>
            </div>
        </div>

        <div class="col-span-full w-96 min-w-72">
            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Selfie with ID</label>
            <div class="mt-2 h-full flex flex-col justify-start rounded-lg border border-dashed border-gray-900/25 {{ $selfie_image ? 'pb-10' : 'py-10' }}">
                @if ($selfie_image)
                <img class="rounded-t-lg aspect-video object-cover" src="{{ $selfie_image->temporaryUrl() }}" alt="Selfie">
                @endif
                <div class="text-center">
                    @if (!$selfie_image)
                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                    </svg>
                    @endif
                    <div class="mt-4 flex justify-center text-sm leading-6 text-gray-600">
                        <label for="selfie" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 hover:text-indigo-500">
                            <span>Upload a file</span>
                            <input wire:model="selfie_image" id="selfie" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                </div>
            </div>
        </div>
    </form>
</div>