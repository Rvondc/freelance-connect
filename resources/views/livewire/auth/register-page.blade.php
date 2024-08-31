<div>
    <!-- NOTE: Increment the $page by 1 to move to the next page -->
    <!-- NOTE: Decrement the $page by 1 to move to the previous page -->

    <x-slot name="title">Create Account</x-slot>

    <!-- TODO: Make it look good -->
    @if ($errors->any())
    <div class="fixed inset-0 flex items-center justify-center z-50" x-cloak>
        <div class="bg-white rounded-lg shadow-lg p-4 min-w-96">
            @foreach ($errors->all() as $error)
            <p class="text-red-500">{{ $error }}</p>
            @endforeach
            <button wire:click="resetErrors()" class="mt-4 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 focus:outline-none">
                Close
            </button>
        </div>
    </div>
    @endif

    @if ($page === 0)
    <div class="h-full py-5 text-left md:h-screen bg-slate-950">
        <div class="container mx-auto size-4/5 lg:size-3/5">
            <h1 class="text-3xl font-bold text-white max-sm:text-2xl">Create <span class="text-green-400">Account</span></h1>
            <form wire:submit="nextPage()">
                <div class="px-3 pb-3 pt-1.5 my-2 rounded-lg bg-slate-800 shadow-lg shadow-black/30">
                    <h3 class="mb-1 font-semibold text-gray-200">I'm a</h3>
                    <div class="flex gap-3 max-sm:flex-col">
                        <div class="flex items-center justify-between p-3 font-semibold bg-green-400 rounded-lg flex-nowrap md:basis-1/2 lg:basis-1/3">
                            <label for="freelancer" class="flex flex-col flex-nowrap">
                                <h3>Freelancer</h3>
                                <p class="text-xs text-gray-600">I'm looking for work</p>
                            </label>
                            <input wire:model="role" value="Freelancer" type="radio" name="role" id="freelancer" class="size-8">
                        </div>
                        <div class="flex items-center justify-between p-3 font-semibold bg-gray-300 rounded-lg flex-nowrap md:basis-1/2 lg:basis-1/3">
                            <label for="client">
                                <h3>Client</h3>
                                <p class="text-xs text-gray-600">I'm hiring for a project</p>
                            </label>
                            <input wire:model="role" value="Client" type="radio" name="role" id="client" class="size-8">
                        </div>
                    </div>
                </div>

                <div class="px-3 py-1.5 my-2 rounded-lg bg-slate-800 shadow-lg shadow-black/30">
                    <div class="flex flex-col gap-2 md:flex-row md:gap-3">
                        <div class="flex flex-col md:basis-1/3">
                            <label for="first_name" class="text-sm font-semibold text-white">First name</label>
                            <input wire:model="first_name" type="text" name="first_name" id="first_name" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                        <div class="flex flex-col md:basis-1/3">
                            <label for="middle_name" class="text-sm font-semibold text-white">Middle name</label>
                            <input wire:model="middle_name" type="text" name="middle_name" id="middle_name" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                        <div class="flex flex-col md:basis-1/3">
                            <label for="last_name" class="text-sm font-semibold text-white">Last name</label>
                            <input wire:model="last_name" type="text" name="last_name" id="last_name" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 md:my-8 md:flex-row md:gap-3">
                        <div class="flex flex-col md:basis-3/5">
                            <label for="birthdate" class="text-sm font-semibold text-white">Birthdate</label>
                            <input wire:model="birthdate" type="date" name="birhtdate" id="birthdate" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 my-2 md:flex-row md:gap-3">
                        <div class="flex flex-col md:basis-1/2">
                            <label for="username" class="text-sm font-semibold text-white">Username</label>
                            <input wire:model="username" type="text" name="username" id="username" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                        <div class="flex flex-col md:basis-1/2">
                            <label for="email" class="text-sm font-semibold text-white">Email</label>
                            <input wire:model="email" type="email" name="email" id="email" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 my-2 md:flex-row md:gap-3">
                        <div class="flex flex-col md:basis-1/2">
                            <label for="password" class="text-sm font-semibold text-white">Password</label>
                            <input wire:model="password" type="password" name="password" id="password" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                        <div class="flex flex-col md:basis-1/2">
                            <label for="confirm_password" class="text-sm font-semibold text-white">Confirm Password</label>
                            <input wire:model="confirm_password" type="password" name="confirm_password" id="confirm_password" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                    </div>
                </div>

                <div class="flex gap-1 align-middle md:mt-5">
                    <input wire:model.live="agreed_terms" type="checkbox" name="approve_tos" id="approve_tos" class="size-4">
                    <label for="approve_tos" class="text-xs text-white">
                        I agree with the
                        <a href="#" class="font-medium text-green-400">Terms & Conditions</a>
                    </label>
                </div>

                <div class="flex flex-col justify-center gap-3 mt-3 md:mt-5">
                    <button {{ $agreed_terms ? '' : 'disabled' }} type="submit" class="h-10 p-1 mx-auto font-semibold {{ $agreed_terms ? 'bg-green-400' : 'bg-gray-400' }} rounded-lg max-w-fit md:p-2">
                        Create Account
                    </button>
                    <p class="mx-auto text-xs font-medium text-gray-400">
                        Already have an account? <a href="/login" wire:navigate class="text-green-400">Sign In</a>
                    </p>
                </div>
            </form>
        </div>
        @endif

        @if ($page === 1)
        <div>
            <div class="bg-slate-950 flex-col items-center content-center min-h-screen p-10">
                <h1 class="text-2xl font-semibold mb-4"><b class="text-green-400">ID</b> <b class="text-white">Submission</b></h1>
                <hr>
                <div class="bg-white mt-10 p-10 pb-20 rounded-lg shadow-md">
                    <form class="flex flex-wrap justify-center content-stretch gap-10">
                        <div class="col-span-full w-96 min-w-72">
                            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Front of ID</label>
                            <div class="mt-2 h-full flex flex-col justify-start rounded-lg border border-dashed border-gray-900/25 {{ $front_id_image ? 'pb-10' : 'py-10' }}">
                                @if ($front_id_image)
                                <img class="rounded-t-lg aspect-video object-cover" src="{{ $front_id_image->temporaryUrl() }}" alt="Front">
                                @endif
                                <div class="text-center">
                                    @if (!$front_id_image)
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                    </svg>
                                    @endif
                                    <div class="mt-4 flex justify-center text-sm leading-6 text-gray-600">
                                        <label for="front" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 hover:text-indigo-500">
                                            <span>Upload a file</span>
                                            <input wire:model="front_id_image" id="front" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-full w-96 min-w-72">
                            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Back of ID</label>
                            <div class="mt-2 flex h-full flex-col justify-start rounded-lg border border-dashed border-gray-900/25 {{ $back_id_image ? 'pb-10' : 'py-10' }}">
                                @if ($back_id_image)
                                <img class="rounded-t-lg aspect-video object-cover" src="{{ $back_id_image->temporaryUrl() }}" alt="Back">
                                @endif
                                <div class="text-center">
                                    @if (!$back_id_image)
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                    </svg>
                                    @endif
                                    <div class="mt-4 flex justify-center text-sm leading-6 text-gray-600">
                                        <label for="back" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 hover:text-indigo-500">
                                            <span>Upload a file</span>
                                            <input wire:model="back_id_image" id="back" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-full w-96 min-w-72">
                            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Selfie with ID</label>
                            <div class="mt-2 h-full flex flex-col justify-start rounded-lg border border-dashed border-gray-900/25 {{ $selfie_image ? 'pb-10' : 'py-10' }}">
                                @if ($selfie_image)
                                <img class="rounded-t-lg aspect-video object-cover" src="{{ $selfie_image->temporaryUrl() }}" alt="Selfie">
                                @endif
                                <div class="text-center">
                                    @if (!$selfie_image)
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                    </svg>
                                    @endif
                                    <div class="mt-4 flex justify-center text-sm leading-6 text-gray-600">
                                        <label for="selfie" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 hover:text-indigo-500">
                                            <span>Upload a file</span>
                                            <input wire:model="selfie_image" id="selfie" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mt-8 inline-flex">
                    <button wire:click="prevPage()" class="bg-green-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l-lg">
                        Prev
                    </button>
                    <button wire:click="nextPage()" class="bg-green-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r-lg">
                        Next
                    </button>
                </div>
            </div>
        </div>
        @endif

        @if ($page === 2)
        <!-- TODO: Add confirmation page -->
        <div>
            <div class="bg-slate-950 flex-col items-center content-center min-h-screen p-10">
                <h1 class="text-2xl font-semibold mb-4 text-white">Confirmation Page</h1>
                <p class="text-gray-500">Check your data</p>
                <div class="mt-8 inline-flex">
                    <button wire:click="prevPage()" class="bg-green-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-lg">
                        Prev
                    </button>
                </div>
                <div class="flex flex-col justify-center gap-3 mt-3 md:mt-5">
                    <button wire:click="save()" type="submit" class="mx-auto font-semibold transition-transform ease-in-out hover:transform hover:scale-110 bg-blue-400 shadow-blue-400/30 shadow-xl rounded-lg max-w-fit p-4">
                        Become a {{ $role }}!
                    </button>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>