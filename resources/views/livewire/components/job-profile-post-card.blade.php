<div>
    <div class="flex flex-col">
        <div class="flex w-[450px] justify-between">
            <div class="flex flex-col flex-1">
                <h1 class="text-white font-thin text-md">Job Title: <span class="tracking-wider">{{ $job->name }}</span></h1>
                <p class="text-xs text-white font-thin">
                    Client Rating:
                    @if ($job->status === 'Available')
                    <span class="italic text-blue-300">(N/A)</span>
                    @elseif ($job->status === 'Canceled')
                    <span class="text-red-500 font-medium">Canceled</span>
                    @endif
                </p>

                <div class="flex">
                    @if ($job->status === 'Available')
                    <button class="text-xs text-blue-900 bg-blue-300 mr-1.5 w-fit shadow-md rounded mt-3 py-1 flex place-items-center px-2">
                        <span class="material-symbols-outlined mr-1 text-[16px]">
                            visibility
                        </span>
                        Interested Freelancers
                    </button>
                    <button wire:click="cancel()" wire:confirm="Are you sure you want to cancel this job?" class="text-xs text-red-900 bg-red-300 w-fit shadow-md rounded mt-3 py-1 flex place-items-center px-1">
                        <span class="material-symbols-outlined text-[16px]">
                            cancel
                        </span>
                    </button>
                    @endif
                </div>
            </div>

            <div class="mx-4"></div>

            <div class="flex flex-col flex-1">
                <p class="text-end text-[10px] text-gray-400 italic font-thin">Deadline:<br> <span class="text-xs text-white">{{ $job->deadline->format('M. j, Y H:i A') }}</span></p>
                <p class="text-end text-white text-xs mt-1">
                    @if ($job->status === 'Available')
                    <span class="text-blue-300">Client:</span>
                    @elseif ($job->status === 'Canceled')
                    <span class="text-red-500">Client:</span>
                    @endif
                    {{ $job->client->getFullname() }}
                </p>
            </div>
        </div>

        <div class="self-center flex place-items-center">
            <button wire:click="previous" class="text-white mr-3 text-2xl hover:scale-[1.3] cursor-pointer">&lt;</button>
            <div class="rounded-lg mt-4">
                @foreach ($job->getImages() as $image)
                <img class="@if($loop->index !== $page) hidden @endif w-64 aspect-square object-cover rounded-lg" src="{{ asset('storage/projects/images/' . $image->image) }}" alt="">
                @endforeach
            </div>
            <button wire:click="next" class="text-white ml-3 text-2xl hover:scale-[1.3] cursor-pointer">&gt;</button>
        </div>

        <p class="self-center text-white text-xs py-2">{{ $page + 1 }} / {{ count($job->getImages()) }}</p>
    </div>
</div>