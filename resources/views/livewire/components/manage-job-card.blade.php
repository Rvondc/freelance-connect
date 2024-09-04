<div>
    @php($images = $job->getImages())
    <div class="rounded-lg border flex flex-col">
        <div class="flex min-w-72 border-b mb-4">
            <button class="hover:bg-white/20 p-2 flex-1 pt-4">
                <span class="material-symbols-outlined text-white">
                    delete
                </span>
            </button>

            <button class="hover:bg-white/20 p-2 flex-1 pt-4">
                <span class="material-symbols-outlined text-white">
                    chat
                </span>
            </button>

            <button class="hover:bg-white/20 p-2 flex-1 pt-4">
                <span class="material-symbols-outlined text-white">
                    brightness_alert
                </span>
            </button>
        </div>

        <h1 class="ml-6 text-white font-thin">Title: {{ $job->name }}</h1>
        <p class="ml-6 text-xs text-white font-thin">Deadline: {{ $job->deadline->format('M. j, Y h:i A') }} </p>
        <p class="ml-6 text-xs text-white font-thin">
            Status:
            @if ($job->status === 'Available')
            <span class="text-blue-300">Available</span>
            @elseif ($job->status === 'Canceled')
            <span class="text-red-500">Canceled</span>
            @endif
        </p>
        <div class="my-2"></div>
        <div class="flex justify-center mb-1">
            <button wire:click="previous()" class="text-white text-2xl">&lt;</button>
            <img class="self-center aspect-[1.6] object-cover max-w-48 rounded mx-4" src="{{ asset('storage/projects/images/' . $images[$page]->image) }}" alt="Image">
            <button wire:click="next()" class="text-white text-2xl">&gt;</button>
        </div>

        <p class="ml-4 text-[10px] font-thin text-gray-300">By: {{ $job->client->getFullname() }}</p>
        <p class="text-white self-center mb-4">{{ $page + 1 }}/{{ count($images) }}</p>
    </div>
</div>