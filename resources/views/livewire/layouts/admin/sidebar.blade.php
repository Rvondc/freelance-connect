<div>
    <div
        class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-[#303030]">
        <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center">
                <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
                <h1 class="font-bold text-gray-200 text-[15px] ml-3">FreelanceConnect</h1>
                <i
                    class="bi bi-x cursor-pointer ml-28 lg:hidden"
                    onclick="openSidebar()"></i>
            </div>
            <div class="my-2 bg-gray-600 h-[1px]"></div>
        </div>
        <a href="/admin" wire:navigate>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <span class="material-symbols-outlined">
                    grid_view
                </span>
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
            </div>
        </a>
        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <span class="material-symbols-outlined">
                work
            </span>
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Bookmark</span>
        </div>
        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <span class="material-symbols-outlined">
                chat
            </span>
            <div class="flex justify-between w-full items-center">
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Chatbox</span>
            </div>
        </div>
        <a href="/credential/review" wire:navigate>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <span class="material-symbols-outlined">
                    clinical_notes
                </span>
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Credential Review</span>
                </div>
            </div>
        </a>
        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <span class="material-symbols-outlined">
                problem
            </span>
            <div class="flex justify-between w-full items-center">
                <span class="text-[15px] ml-4 text-gray-200 font-bold">User Reports</span>
            </div>
        </div>
        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <span class="material-symbols-outlined">
                logout
            </span>
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
        </div>
    </div>
</div>