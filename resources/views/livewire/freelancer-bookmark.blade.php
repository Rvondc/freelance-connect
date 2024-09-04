<div>
    @php($user = auth()->user())
    <div class="bg-[#151922] w-[calc(100%-300px)] h-screen absolute">
        <div class="m-4 bg-[#303030] rounded flex p-4 flex-col h-[calc(100%-2rem)] relative">
            <h1 class="font-bold text-2xl mb-3 text-white">Bookmarks ({{ count($user->bookmarks) }})</h1>

            <div class="flex flex-wrap">
                @foreach ($user->bookmarks as $bookmark)
                <div class="m-2">
                    <livewire:components.job-posting-card :job="$bookmark->job" />
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>