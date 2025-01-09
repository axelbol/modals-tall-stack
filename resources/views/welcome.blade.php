<x-layout>
    <livewire:manage-users />

    {{-- Example #2 --}}
    <div class="flex justify-center">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" onclick="$modals.show('join')">Join</button>
    </div>

    <script>
        window.$modals = {
            show(name) {
                alert('show the modal named ' + name);
            }
        }
    </script>
</x-layout>
