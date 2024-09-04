<div>
    <div class="bg-[#151922] w-[calc(100%-300px)] h-screen absolute">
        <div class="m-4 bg-[#303030] rounded flex flex-col h-[calc(100%-2rem)] relative">
            <div class="w-full h-fit relative" id="profile">
                <img class="aspect-[8] min-h-36 rounded-t object-cover w-full" src="{{ fake()->imageUrl() }}" alt="Image">
                <img class="shadow-lg rounded-full border-gray-700 border absolute w-24 h-24 -bottom-12 left-6 object-cover" src="{{ fake()->imageUrl() }}" alt="">
            </div>
            @php($user = auth()->user())
            @if ($user->getApprovalStatus() == 'Pending')
            <p class="ml-4 mt-14 text-orange-600 tracking-wider text-xs italic">(Pending Verification)</p>
            @elseif ($user->getApprovalStatus() == 'Rejected')
            <p class="ml-4 mt-14 text-red-500 tracking-wider text-xs italic">(Failed Verification)</p>
            @elseif ($user->getApprovalStatus() == 'Approved')
            <p class="ml-4 mt-14 text-green-400 text-xs italic">Verified Freelancer</p>
            @endif
            <h1 class="ml-4 text-white font-semibold tracking-wide text-xl">{{ $user->getFullname() }}</h1>
            <div class="ml-4 flex">
                <p class="border border-gray-400 rounded-full px-2 text-gray-400 text-xs">Joined {{ date_create($user->created_at)->format('M. j, Y') }}</p>
                <div class="mr-1"></div>
                <a class="border border-blue-400 rounded-full px-2 text-blue-400 text-xs" href="https://dialife.info">https://dialife.info</a>
            </div>
            <p class="ml-4 mt-3 text-white text-sm">{{ $user->bio }}</p>

            <div class="border-b">
                <div class="flex mt-5 mb-1 ml-4">
                    <p class="text-[#f9ff59] text-lg font-bold flex place-items-center mr-10">
                        <img class="h-5 mr-2" src="{{ asset('assets/star.svg') }}" alt="Star">
                        N / A AVERAGE
                    </p>
                    <p class="text-[#84ff5e] text-lg font-bold flex place-items-center">
                        <img class="h-5 mr-2" src="{{ asset('assets/check_circle.svg') }}" alt="Completed">
                        0 COMPLETED
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>