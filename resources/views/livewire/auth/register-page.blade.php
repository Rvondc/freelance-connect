<div class="container mx-auto bg-blue-500">
    <x-slot name="title">Create Account</x-slot>
    <div class="px-20">
        <h1 class="text-3xl font-bold text-black">Create <span class="text-green-400">Account</span></h1>

        <form action="#" class="bg-red-300 size-3/5">
            <div class="p-3 mx-5 my-2 rounded bg-slate-800">
                <h3 class="font-semibold text-gray-200">I'm a</h3>
                <div class="flex gap-3">
                    <div
                        class="flex items-center justify-between p-3 font-semibold bg-green-400 rounded flex-nowrap basis-1/4">
                        <label for="freelancer" class="flex flex-col flex-nowrap">
                            <h3>Freelancer</h3>
                            <p class="text-xs text-gray-600">I'm looking for work</p>
                        </label>
                        <input type="radio" name="freelancer" id="freelancer" class="size-8">
                    </div>
                    <div
                        class="flex items-center justify-between p-3 font-semibold bg-gray-300 rounded flex-nowrap basis-1/4">
                        <label for="client">
                            <h3>Cient</h3>
                            <p class="text-xs text-gray-500">I'm hiring for a project</p>
                        </label>
                        <input type="radio" name="client" id="client" class="size-8">
                    </div>
                </div>
            </div>


        </form>
    </div>
</div>
