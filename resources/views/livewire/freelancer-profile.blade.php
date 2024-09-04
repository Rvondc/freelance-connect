<div>
    <div class="bg-[#151922] w-[calc(100%-300px)] h-screen absolute">
        <div class="m-4 bg-[#303030] rounded flex flex-col h-[calc(100%-2rem)] relative">
            <div class="w-full h-fit relative" id="profile">
                <div class="relative">
                    <img class="aspect-[8] min-h-36 rounded-t object-cover w-full" src="{{ fake()->imageUrl() }}" alt="Image">
                    <button class="flex border place-items-center justify-center absolute right-4 bottom-4 bg-green-600/90 shadow-lg rounded-lg p-1">
                        <span class="material-symbols-outlined text-white">
                            edit
                        </span>
                    </button>
                </div>

                <img class="shadow-lg rounded-full border-gray-700 border absolute w-24 h-24 -bottom-12 left-6 object-cover" src="{{ fake()->imageUrl() }}" alt="">
            </div>

            <div class="bg-gray-700 w-fit self-center mt-10 p-4 rounded-lg shadow-lg flex flex-col">
                <h1 class="text-white font-bold text-lg mb-3">Personal <span class="text-green-500">Information</span></h1>
                <div class="flex">
                    <div class="flex flex-col flex-1">
                        <label class="text-white" for="first_name">First Name</label>
                        <input value="{{ $user->first_name }}" class="border rounded-lg p-2" type="text" id="first_name">

                        <label class="text-white mt-3" for="gender">Gender</label>
                        <select class="border rounded-lg p-2" name="gender" id="gender">
                            <option {{ $user->gender === 'Male' ? 'selected' : '' }} value="Male">Male</option>
                            <option {{ $user->gender === 'Female' ? 'selected' : '' }} value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mx-2"></div>
                    <div class="flex flex-col flex-1">
                        <label class="text-white" for="last_name">Last Name</label>
                        <input value="{{ $user->last_name }}" class="border rounded-lg p-2" type="text" id="last_name">

                        <label class="text-white mt-3" for="birthdate">Birthdate</label>
                        <input value="{{ $user->birthdate }}" class="border rounded-lg py-1.5 px-2" type="date" id="birthdate">
                    </div>
                </div>

                <label class="text-white mt-3" for="email">Email</label>
                <input value="{{ $user->email }}" class="border rounded-lg p-2" type="email">

                <label class="text-white mt-3" for="phone">Phone Number</label>
                <input class="border rounded-lg p-2" type="phone">

                <label class="text-white mt-3" for="bio">Bio</label>
                <textarea class="border rounded-lg p-2" name="bio" id="bio">{{ $user->bio }}</textarea>
            </div>
        </div>
    </div>
</div>