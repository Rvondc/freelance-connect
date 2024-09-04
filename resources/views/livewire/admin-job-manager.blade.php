<div>
    <div class="bg-[#151922] w-[calc(100%-300px)] h-screen absolute max-h-screen overflow-scroll">
        <div class="bg-[#303030] m-4 rounded">
            <div class="p-4">
                <h1 class="font-bold text-white">Manage Jobs</h1>

                <h1 class="font-semibold text-white mt-4">Today</h1>
                <div class="flex overflow-scroll">
                    @foreach ($jobsToday as $job)
                    <div class="m-2">
                        <livewire:components.manage-job-card :job="$job" />
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="border-b"></div>

            <div class="p-4">
                <h1 class="font-semibold text-white mt-4">All</h1>
                <div class="flex flex-wrap overflow-scroll">
                    @foreach ($jobsAll as $job)
                    <div class="m-2">
                        <livewire:components.manage-job-card :job="$job" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>