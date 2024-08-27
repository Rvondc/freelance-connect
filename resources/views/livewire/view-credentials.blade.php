<div>
    <div class="absolute z-40 m-5">
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
</div>