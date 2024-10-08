<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>{{ $title ?? 'Admin Page' }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    @livewire('wire-elements-modal')
    <livewire:layouts.admin.sidebar />

    <div class="ml-[300px]">
        {{ $slot }}
    </div>
</body>

</html>