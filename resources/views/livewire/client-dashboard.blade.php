<div>
   <div class="bg-[#151922] w-[calc(100%-300px)] h-screen absolute">
      <div class="m-4 bg-[#303030] rounded flex flex-col h-[calc(100%-2rem)] relative">
         <div class="w-full h-fit relative" id="profile">
            <img class="aspect-[10] min-h-20 rounded-t object-cover w-full" src="{{ fake()->imageUrl() }}" alt="Image">
            <img class="shadow-lg rounded-full border-gray-700 border absolute w-24 h-24 -bottom-12 left-6 object-cover" src="{{ fake()->imageUrl() }}" alt="">
         </div>
         @php($user = auth()->user())
         @if ($user->getApprovalStatus() == 'Pending')
         <p class="ml-4 mt-14 text-orange-600 tracking-wider text-xs italic">(Pending Verification)</p>
         @elseif ($user->getApprovalStatus() == 'Rejected')
         <p class="ml-4 mt-14 text-red-500 tracking-wider text-xs italic">(Failed Verification)</p>
         @elseif ($user->getApprovalStatus() == 'Approved')
         <p class="ml-4 mt-14 text-green-400 text-xs italic">Verified Client</p>
         @endif
         <h1 class="ml-4 text-white font-semibold tracking-wide text-xl">{{ $user->getFullname() }}</h1>
         <div class="ml-4 flex">
            <p class="border border-gray-400 rounded-full px-2 text-gray-400 text-xs">Joined {{ date_create($user->created_at)->format('M. j, Y') }}</p>
            <div class="mr-1"></div>
            <a class="border border-blue-400 rounded-full px-2 text-blue-400 text-xs" href="https://dialife.info">https://dialife.info</a>
         </div>
         <p class="ml-4 mt-3 text-sm text-white">{{ $user->bio }}</p>

         <div class="border-b">
            <div class="flex mt-5 ml-4">
               <a href="?status=Available" wire:navigate class="text-blue-300 mr-4 border-r border-gray-600 pr-4 text-lg font-bold flex place-items-center @if($status === 'Available') !border-white @endif">
                  <span class="block w-3 h-3 bg-blue-300 shadow-lg shadow-blue-300 rounded-full mr-2"></span>
                  {{ count($jobs->where('status', '=', 'Available')) }} AVAILABLE
               </a>
               <a href="?status=InProgress" wire:navigate class="text-orange-300 mr-4 border-r border-gray-600 pr-4 text-lg font-bold flex place-items-center @if($status === 'InProgress') !border-white @endif">
                  <span class="block w-3 h-3 bg-orange-300 shadow-lg shadow-orange-300 rounded-full mr-2"></span>
                  {{ count($jobs->where('status', '=', 'InProgress')) }} PENDING
               </a>
               <a href="?status=Canceled" wire:navigate class="text-red-500 mr-4 border-r border-gray-600 pr-4 text-lg font-bold flex place-items-center @if($status === 'Canceled') !border-white @endif">
                  <span class="block w-3 h-3 bg-red-500 shadow-lg shadow-red-500 rounded-full mr-2"></span>
                  {{ count($jobs->where('status', '=', 'Canceled')) }} CANCELED
               </a>
               <a href="?status=Finished" wire:navigate class="text-[#84ff5e] text-lg font-bold flex place-items-center @if($status === 'Finished') !border-white border-r pr-4 @endif">
                  <img class="h-5 mr-2" src="{{ asset('assets/check_circle.svg') }}" alt="Completed">
                  {{ count($jobs->where('status', '=', 'Finished')) }} COMPLETED
               </a>
            </div>
         </div>

         <div class="flex flex-col items-center overflow-scroll">
            @foreach ($selectedJobs as $job)
            <div class="border-b border-gray-500 w-full flex justify-center">
               <div class="border-x-[0.5px] border-gray-500 py-3 px-10">
                  <livewire:components.job-profile-post-card :job="$job" on:click="$refresh" />
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>