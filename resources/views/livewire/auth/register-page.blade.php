<div>
    <!-- NOTE: Increment the $page by 1 to move to the next page -->
    <!-- NOTE: Decrement the $page by 1 to move to the previous page -->
    @if ($page === 0)

    <div class="h-full py-5 text-left md:h-screen bg-slate-950">
        <x-slot name="title">Create Account</x-slot>

        <div class="container mx-auto size-4/5 lg:size-3/5">
            <h1 class="text-3xl font-bold text-white max-sm:text-2xl">Create <span class="text-green-400">Account</span></h1>

            <form action="#">
                <div class="px-3 pb-3 pt-1.5 my-2 rounded-lg bg-slate-800 shadow-lg shadow-black/30">
                    <h3 class="mb-1 font-semibold text-gray-200">I'm a</h3>
                    <div class="flex gap-3 max-sm:flex-col">
                        <div class="flex items-center justify-between p-3 font-semibold bg-green-400 rounded-lg flex-nowrap md:basis-1/2 lg:basis-1/3">
                            <label for="freelancer" class="flex flex-col flex-nowrap">
                                <h3>Freelancer</h3>
                                <p class="text-xs text-gray-600">I'm looking for work</p>
                            </label>
                            <input type="radio" name="freelancer" id="freelancer" class="size-8">
                        </div>
                        <div class="flex items-center justify-between p-3 font-semibold bg-gray-300 rounded-lg flex-nowrap md:basis-1/2 lg:basis-1/3">
                            <label for="client">
                                <h3>Client</h3>
                                <p class="text-xs text-gray-600">I'm hiring for a project</p>
                            </label>
                            <input type="radio" name="client" id="client" class="size-8">
                        </div>
                    </div>
                </div>

                <div class="px-3 py-1.5 my-2 rounded-lg bg-slate-800 shadow-lg shadow-black/30">
                    <div class="flex flex-col gap-2 md:flex-row md:gap-3">
                        <div class="flex flex-col md:basis-1/3">
                            <label for="first_name" class="text-sm font-semibold text-white">First name</label>
                            <input type="text" name="first_name" id="first_name" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                        <div class="flex flex-col md:basis-1/3">
                            <label for="middle_name" class="text-sm font-semibold text-white">Middle name</label>
                            <input type="text" name="middle_name" id="middle_name" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                        <div class="flex flex-col md:basis-1/3">
                            <label for="last_name" class="text-sm font-semibold text-white">Last name</label>
                            <input type="text" name="last_name" id="last_name" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 my-2 md:flex-row md:gap-3">
                        <div class="flex flex-col md:basis-1/2">
                            <label for="username" class="text-sm font-semibold text-white">Username</label>
                            <input type="text" name="username" id="username" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                        <div class="flex flex-col md:basis-1/2">
                            <label for="email" class="text-sm font-semibold text-white">Email</label>
                            <input type="email" name="email" id="email" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 my-2 md:flex-row md:gap-3">
                        <div class="flex flex-col md:basis-1/2">
                            <label for="password" class="text-sm font-semibold text-white">Password</label>
                            <input type="password" name="password" id="password" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                        <div class="flex flex-col md:basis-1/2">
                            <label for="confirm_password" class="text-sm font-semibold text-white">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="h-10 px-3 rounded-lg md:w-full">
                        </div>
                    </div>
                </div>

                <div class="flex gap-1 align-middle md:mt-5">
                    <input type="checkbox" name="approve_tos" id="approve_tos" class="size-4">
                    <label for="approve_tos" class="text-xs text-white">
                        I agree with the
                        <a href="#" class="font-medium text-green-400">Terms & Conditions</a>
                    </label>
                </div>

                <div class="flex flex-col justify-center gap-3 mt-3 md:mt-5">
                    <button type="submit" class="h-10 p-1 mx-auto font-semibold bg-green-400 rounded-lg max-w-fit md:p-2">
                        Create Account
                    </button>
                    <p class="mx-auto text-xs font-medium text-gray-400">
                        Already have an account? <a href="#" class="text-green-400">Sign In</a>
                    </p>
                </div>
            </form>
        </div>
        @endif

        @if ($page === 1)
        <div>
            <livewire:components.upload-credentials />
        </div>
        @endif

        @if ($page === 2)
        <!-- TODO: Add confirmation page -->
        @endif
    </div>