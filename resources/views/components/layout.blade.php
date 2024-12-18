<!doctype html>

<title>Modal Learning</title>

{{-- Tailwind --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

@livewireStyles
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.7/dist/cdn.min.js"></script>

<body class="bg-gray-200">

    <div class="container max-w-lg mx-auto bg-gray-300">
        <header class="bg-blue-600 p-4">
            <h1 class="font-bold text-white">
                My Site
            </h1>
        </header>

        <div class="grid grid-cols-12 p-4">
            <aside class="mr-6 col-span-3 text-sm">
                <ul>
                    <li>Link 1</li>
                    <li>Link 2</li>
                    <li>Link 3</li>
                </ul>
            </aside>

            <main class="text-sm col-span-9">

                {{ $slot }}

            </main>
        </div>

        <footer class="bg-blue-600 p-4 flex items-center justify-between text-xs text-white">
            <h5 class="text-xs">My Site</h5>
            <p>2024</p>
        </footer>
    </div>

    {{-- {{ $slot }} --}}

    @livewireScripts

</body>
