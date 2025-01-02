<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- tailwind link --}}
    @vite('resources/css/app.css')
    {{-- alpine js link --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- font inter --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>{{ $title }}</title>
</head>

<body class="h-full">

    <div class="min-h-full">
        {{-- navbar --}}
        <x-navbar></x-navbar>
        {{-- navbar end --}}

        {{-- header --}}
        <x-header>{{ $title }}</x-header>
        {{-- header end --}}

        {{-- content --}}

        {{ $slot }}

        {{-- content end --}}
    </div>




</body>

</html>
