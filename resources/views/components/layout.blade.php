<!doctype html>

<title>Modal Learning</title>

{{-- Tailwind --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

@livewireStyles

<body class="bg-gray-200">

    {{ $slot }}

    @livewireScripts

</body>
