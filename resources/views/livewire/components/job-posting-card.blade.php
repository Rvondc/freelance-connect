<div>
    <div class="border border-black rounded-md relative">
        @php($first = $images[0]->image)
        <div class="bg-slate-800 rounded-t-md">
            <img class="max-w-64 object-cover aspect-square rounded-t-md opacity-60 blur-[1px]" src="{{ asset('storage/projects/images/' . $first) }}" alt="{{ $job->name }}">
        </div>

        <div class="absolute z-10 top-[100px] left-2">
            <p class="text-xs m-0 text-white">{{ $client->getFullname() }}</p>
            <h1 class="font-bold m-0 text-white text-xl">{{ $job->name }}</h1>
        </div>

        <div class="absolute z-10 top-2 left-2 bg-white p-1.5 rounded shadow border-black border">
            <p class="text-[10px] text-gray-500">Deadline:</p>
            <p>{{ date_create($job->deadline)->format('M. j, Y h:i A') }}</p>
        </div>

        <button class="absolute z-10 bottom-14 left-2 bg-white p-2 rounded-full border border-black shadow-lg transition-transform hover:scale-110 active:scale-90">
            <img src="{{ asset('assets/bookmark.svg') }}" alt="Bookmark">
        </button>

        <div class="flex justify-between p-2">
            <p class="font-bold">₱ {{ number_format($job->budget, 2) }}</p>
            <button class="transition-transform bg-green-500 px-3 rounded border-black border hover:scale-110 text-white">Details</button>
        </div>
    </div>
</div>