<div>
    <span
        class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
        onclick="openSidebar()">
        <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
    </span>
    <div
        class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-[#303030]">
        <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center">
                <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
                <h1 class="font-bold text-gray-200 text-[15px] ml-3">FreelanceConnect</h1>
            </div>
            <div class="my-2 bg-gray-600 h-[1px]"></div>
        </div>
        <div
            class="p-2.5 flex flex-col rounded-md px-4 duration-300 cursor-pointer bg-white text-black">
            @php($user = auth()->user())
            <p class="font-bold text-left">{{ $user->getFullname() }}</p>
            <p class="text-left text-sm text-gray-600 font-thin">{{ $user->user_type }} @if($user->getApprovalStatus() === 'Pending') <span class="text-yellow-600">(Pending Approval)</span> @elseif($user->getApprovalStatus() === 'Rejected') <span class="text-red-600">(Rejected)</span> @endif</p>
            @if($user->getApprovalStatus() === 'Rejected')
            <button class="bg-red-600 text-xs text-white p-1 px-2 rounded max-w-fit mt-2">Resubmit</button>
            @endif
            <p></p>
            {{-- <i class="bi bi-search text-sm"></i>
            <input
                type="text"
                placeholder="Search"
                class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" /> --}}
        </div>
        <a href="/freelancer/dashboard" wire:navigate>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-house-door-fill"></i>
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
            </div>
        </a>
        <a href="/jobs" wire:navigate>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-green-400">
                <i class="transition-all hover:rotate-180 hover:scale-150 bi bi-grid-fill"></i>
                <span class="transition-all hover:scale-110 text-[15px] ml-4 text-green-400 font-bold">Browse</span>
            </div>
        </a>
        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-bookmark-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Bookmark</span>
        </div>
        <div class="my-4 bg-gray-600 h-[1px]"></div>
        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
            onclick="dropdown()">
            <i class="bi bi-chat-left-text-fill"></i>
            <div class="flex justify-between w-full items-center">
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Chatbox</span>
                <span class="text-sm rotate-180" id="arrow">
                    <i class="bi bi-chevron-down"></i>
                </span>
            </div>
        </div>
        <div
            class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold"
            id="submenu">
            <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                Social
            </h1>
            <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                Personal
            </h1>
            <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                Friends
            </h1>
        </div>
        <div wire:click="logout()"
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-box-arrow-in-right"></i>
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
        </div>
    </div>
</div>