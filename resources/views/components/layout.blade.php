<!doctype html>

<title>Modal Learning</title>

{{-- Tailwind --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

@livewireStyles
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.7/dist/cdn.min.js"></script>

<body class="bg-gray-200">

    {{ $slot }}

    @livewireScripts

</body>
