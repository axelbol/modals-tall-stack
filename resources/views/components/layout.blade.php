<!doctype html>

<title>Modal Learning</title>

{{-- Tailwind --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

@livewireStyles

<body class="bg-gray-200">

<div class="max-w-7xl mx-auto px-4 mt-12">
    <ul role="list" class="divide-y divide-gray-100">
        {{ $slot }}
    </ul>
</div>

@livewireScripts
</body>
