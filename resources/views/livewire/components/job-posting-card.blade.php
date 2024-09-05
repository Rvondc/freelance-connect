<div>
    <div class="border border-white rounded-md relative shadow-md">
        @php($first = $images[0]->image)
        <div class="bg-slate-800 rounded-t-md">
            <img class="max-w-64 object-cover aspect-square rounded-t-md opacity-60 blur-[1px]" src="{{ asset('storage/projects/images/' . $first) }}" alt="{{ $job->name }}">
        </div>

        <div class="absolute z-10 top-[100px] left-2">
            <p class="text-xs m-0 text-white">By: {{ $client->getFullname() }}</p>
            <h1 class="font-bold m-0 text-white text-xl">{{ $job->name }}</h1>
        </div>

        <div class="absolute z-10 top-2 left-2 bg-[#303030] p-1.5 rounded shadow border-white border">
            <p class="text-[10px] text-white">Deadline:</p>
            @if ($job->status === 'Available')
            <p class="text-white text-sm">{{ date_create($job->deadline)->format('M. j, Y h:i A') }}</p>
            @elseif ($job->status === 'Canceled')
            <p class="text-red-500 text-sm">(Canceled)</p>
            @elseif ($job->status === 'InProgress')
            <p class="text-yellow-500 text-sm">(In Progress)</p>
            @endif
        </div>

        <button wire:click="bookmark()" class="max-h-9 absolute z-10 bottom-14 left-2 bg-white p-1 rounded border @if($bookmarked) border-blue-600 !bg-blue-100 @else border-black @endif shadow-lg transition-transform hover:scale-105 active:scale-90">
            @if ($bookmarked)
            <span class="text-blue-600 material-symbols-outlined">
                bookmark
            </span>
            @else
            <span class="material-symbols-outlined">
                bookmark_add
            </span>
            @endif
        </button>

        <div class="flex justify-between p-2">
            <livewire:components.job-details-modal :job="$job" />

            <p class="font-bold">₱ {{ number_format($job->budget, 2) }}</p>
            <button class="px-3 text-white transition-transform bg-green-500 border border-black rounded hover:scale-110" x-data wire:click="$dispatch('open-modal')">Details</button>
        </div>
    </div>
</div>