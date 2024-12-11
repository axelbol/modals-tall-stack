<div>
    <div class="fixed inset-0 bg-gray-900 opacity-70"></div>

    <div class="bg-white shadow-md p-4 max-w-sm h-48 m-auto rounded-md fixed inset-0">
        <div class="flex flex-col h-full justify-between">
            <header>
                <h3 class="font-bold text-lg">Are you sure?</h3>
            </header>

            <main>
                <p>If you proceed, the entire work will be deleted.</p>
            </main>

            <footer class="space-x-4">
                {{-- <button class="bg-gray-400 hover:bg-gray-500 text-xs uppercase py-2 px-4 rounded-md text-white transition-all duration-200">Cancel</button> --}}
                <x-button class="bg-gray-400 hover:bg-gray-500">Cancel</x-button>
                <x-button class="bg-blue-400 hover:bg-blue-500">Continue</x-button>
            </footer>
        </div>
    </div>
</div>
