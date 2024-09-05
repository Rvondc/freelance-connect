<div 
    x-data="{ show: false, job: '{{ $job->name }}' }" 
    x-show="show" 
    x-on:open-modal.window="show = true" 
    x-on:close-modal.window="show = false"
    x-on:keydown.escape.window="show = false" 
    class="fixed inset-0 z-50">
    
    <div x-on:click="show = false" class="fixed inset-0 opacity-75 bg-slate-950"></div>
    <div class="fixed inset-0 grid max-w-4xl grid-cols-3 gap-1 m-auto bg-[#303030] rounded max-h-fit">
        <div class="grid grid-rows-2 gap-4 p-4 pl-2">
            @php($placeholder = $images[$page]->image)
            <div class="rounded-t-md flex">
                <button class="text-white" wire:click="previous()">&lt;</button>
                <img class="max-w-64 mx-2 shadow-lg object-cover aspect-square rounded" src="{{ asset('storage/projects/images/' . $placeholder) }}" alt="{{ $job->name }}">
                <button class="text-white" wire:click="next()">&gt;</button>
            </div>
            <div class="text-sm text-gray-700">
                <h1 class="m-0 text-xl font-bold text-white">{{ $job->name }}</h1>
                <p class="whitespace-break-spaces text-white">Client:            {{ $client->getFullname() }}</p>
                <p class="whitespace-break-spaces text-white">Budget:         {{ $job->budget }}</p>
                <p class="whitespace-break-spaces text-white">Deadline:      {{ $job->deadline }}</p>
            </div>
        </div>
        <div class="grid col-span-2 grid-rows-2 p-4">
            <div class="p-2 overflow-y-scroll border border-gray-400 rounded max-h-52">
                <p class="m-0 text-sm font-semibold mb-2 text-gray-300">Description</p>
                <p class="text-sm text-white">{{ $job->description }}</p>
            </div>
            <div>
                <h3 class="font-bold text-white mb-2">Interested in the project</h3>
                <div class="p-2 overflow-x-scroll border border-white rounded">
                    <table class="text-white text-center table-fixed text-balance">
                        <thead class="text-sm">
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Current Projects</th>
                                <th>Portfolio</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr>
                                <td>Example P. Person</td>
                                <td>August 30, 2024</td>
                                <td>5</td>
                                <td>porfolio.vinzishorny.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-end gap-3">
                <button x-on:click="show = false" type="button" class="px-5 py-4 text-gray-700 transition-transform bg-gray-300 border border-gray-700 rounded hover:scale-110">Close</button>
                <button type="button" class="px-3 py-4 text-white transition-transform bg-green-500 border border-black rounded hover:scale-110">Interested</button>
            </div>
        </div>
    </div>
</div>
