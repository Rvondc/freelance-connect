<div class="h-[calc(100vh-80px)]">
    <div class="flex bg-[#303030] h-fit p-2 w-full">
        <div class="flex m-2 me-12">
            <img class="w-[48px] h-[48px] me-3" src="{{ asset('assets/experience.svg') }}" alt="">
            <select class="bg-transparent text-white pe-5 border-none" name="experience_level" id="experience">
                <option value="Web">Experience</option>
            </select>
        </div>

        <div class="flex m-2">
            <img class="w-[48px] h-[48px] me-3" src="{{ asset('assets/category.svg') }}" alt="">
            <select class="bg-transparent text-white pe-5 border-none" name="category" id="category">
                <option value="Web">Category</option>
            </select>
        </div>

    </div>
    <div class="bg-[#151922] h-full p-4">
        <div class="bg-[#303030] rounded p-4 h-full">
            <div class="flex justify-between place-items-center">
                <h1 class="font-bold text-2xl text-white mb-3">Jobs <span class="text-green-400">({{ count($jobs) }})</span></h1>
                <input wire:model.live="search" class="border border-white rounded p-2" type="text" placeholder="Enter to search...">
            </div>
            <div class="flex flex-wrap">
                @foreach ($jobs as $job)
                <div class="m-2">
                    <livewire:components.job-posting-card :job="$job" />
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>