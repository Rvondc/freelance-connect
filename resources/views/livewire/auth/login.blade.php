<div>
    <x-slot name="title">Sign In</x-slot>

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

    <div class="flex h-screen align-middle bg-slate-950">
        <div class="container px-3 py-8 m-auto rounded-lg shadow-lg lg:px-5 h-fit bg-slate-800 shadow-black/50 w-fit">
            <h1 class="text-xl font-semibold text-center text-white">Log<span class="text-orange-400">in</span></h1>

            <form wire:submit="login()">
                <div class="flex flex-col mt-5">
                    <label for="email" class="text-sm text-white">Email</label>
                    <input wire:model="email" type="email" name="email" id="email" class="w-full h-10 px-3 rounded-lg">
                </div>
                <div class="flex flex-col mt-3">
                    <label for="password" class="text-sm text-white">Password</label>
                    <input wire:model="password" type="password" name="password" id="password" class="w-full h-10 px-3 rounded-lg ">
                </div>

                <div class="my-1 text-end">
                    <a href="#" class="text-xs font-medium text-gray-400">Forgot password?</a>
                </div>

                <div class="flex flex-col gap-5 mt-8 text-center">
                    <button type="submit" class="px-8 py-3 mx-auto font-semibold bg-orange-400 rounded-lg w-fit">Sign In</button>
                    <p class="text-xs font-medium text-gray-400">Don't have an account? <a href="/register" wire:navigate class="text-orange-400">Register here</a></p>
                </div>
            </form>
        </div>
    </div>
</div>