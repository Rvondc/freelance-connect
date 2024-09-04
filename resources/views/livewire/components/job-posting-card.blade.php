<div>
    <div class="relative border border-black rounded-md">
        @php($first = $images[0]->image)
        <div class="bg-slate-800 rounded-t-md">
            <img class="max-w-64 object-cover aspect-square rounded-t-md opacity-60 blur-[1px]" src="{{ asset('storage/projects/images/' . $first) }}" alt="{{ $job->name }}">
        </div>

        <div class="absolute z-0 top-[100px] left-2">
            <p class="m-0 text-xs text-white">{{ $client->getFullname() }}</p>
            <h1 class="m-0 text-xl font-bold text-white">{{ $job->name }}</h1>
        </div>

        <div class="absolute z-0 top-2 left-2 bg-white p-1.5 rounded shadow border-black border">
            <p class="text-[10px] text-gray-500">Deadline:</p>
            <p>{{ date_create($job->deadline)->format('M. j, Y h:i A') }}</p>
        </div>

        <button class="absolute z-0 p-2 transition-transform bg-white border border-black rounded-full shadow-lg bottom-14 left-2 hover:scale-110 active:scale-90">
            <img src="{{ asset('assets/bookmark.svg') }}" alt="Bookmark">
        </button>
        
        <div class="flex justify-between p-2">
            <livewire:components.job-details-modal :job="$job" />
            
            <p class="font-bold">₱ {{ number_format($job->budget, 2) }}</p>
            <button class="px-3 text-white transition-transform bg-green-500 border border-black rounded hover:scale-110" x-data wire:click="$dispatch('open-modal')">Details</button>
        </div>
    </div>
</div>