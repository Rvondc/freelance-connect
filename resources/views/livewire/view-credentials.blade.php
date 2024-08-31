<div>
    <div class="bg-[#151922] w-[calc(100%-300px)] h-screen absolute">
        <div class="bg-white m-4 p-4 rounded">
            <h1 class="font-bold text-xl">View Credentials</h1>
            <p>Name: {{ $user->getFullname() }}</p>
            <div class="flex flex-wrap justify-evenly">
                <div class="ms-4 aspect-video w-96 my-3">
                    <p class="font-bold text-sm italic">Front ID:</p>
                    <img class="object-cover w-full h-full rounded shadow-lg" src="{{ asset('storage/credentials/images/' . $approval->front_id_image) }}" alt="Front ID">
                </div>

                <div class="ms-4 aspect-video w-96 my-3">
                    <p class="font-bold text-sm italic">Back ID:</p>
                    <img class="object-cover w-full h-full rounded shadow-lg" src="{{ asset('storage/credentials/images/' . $approval->back_id_image) }}" alt="Back ID">
                </div>

                <div class="ms-4 aspect-video w-96 my-3">
                    <p class="font-bold text-sm italic">Selfie:</p>
                    <img class="object-cover w-full h-full rounded shadow-lg" src="{{ asset('storage/credentials/images/' . $approval->selfie_image) }}" alt="Selfie ID">
                </div>
            </div>
            <a href="/credential/review" class="px-4 py-2 text-sm font-medium text-gray-900 bg-sky-400 border rounded-lg hover:bg-gray-100 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">Back</a>
        </div>
    </div>
</div>

{{-- <div>
    <div class="absolute z-50">
        <h1 class="font-bold text-xl">View Credentials</h1>
        <p>Name: {{ $user->getFullname() }}</p>

<div class="flex flex-wrap justify-evenly">
    <div class="ms-4 aspect-video w-96">
        <p class="font-bold text-sm italic">Front ID:</p>
        <img class="object-cover w-full h-full rounded shadow-lg" src="{{ asset('storage/credentials/images/' . $pending->front_id_image) }}" alt="Front ID">
    </div>

    <div class="ms-4 aspect-video w-96">
        <p class="font-bold text-sm italic">Back ID:</p>
        <img class="object-cover w-full h-full rounded shadow-lg" src="{{ asset('storage/credentials/images/' . $pending->back_id_image) }}" alt="Back ID">
    </div>

    <div class="ms-4 aspect-video w-96">
        <p class="font-bold text-sm italic">Selfie:</p>
        <img class="object-cover w-full h-full rounded shadow-lg" src="{{ asset('storage/credentials/images/' . $pending->selfie_image) }}" alt="Selfie ID">
    </div>
</div>
</div>
</div> --}}