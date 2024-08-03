<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Admin Page' }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex h-screen bg-slate-950">
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4">
                <h2 class="text-xl font-semibold">FreelanceConnect Admin</h2>
            </div>
            <nav class="mt-6">
                <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Dashboard</a>
                <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Messages</a>
                <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Job Posting</a>
                <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Credential Review</a>
                <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">User Reports</a>
                <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Analytics</a>
            </nav>
        </aside>

        {{ $slot }}
    </div>
</body>

</html>