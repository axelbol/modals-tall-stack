<form
    id="delete-user-form"
    x-data
>
    <p>
        <x-button class="bg-yellow-400 hover:bg-yellow-500" wire:click="$set('showModal', true)">Yes, delete</x-button>
    </p>

    @if ($showModal)
        {{-- Modal --}}
        <x-confirmation-modal>
            <x-slot name="title">
                Are you sure?
            </x-slot>

            <x-slot name="body">
                If you proceed, the entire work will be deleted.
            </x-slot>

            <x-slot name="footer">
                <x-button class="bg-gray-400 hover:bg-gray-500">Cancel</x-button>
                <x-button class="bg-blue-400 hover:bg-blue-500" @click="document.querySelector('#delete-user-form').submit()">Continue</x-button>
            </x-slot>
        </x-confirmation-modal>
    @endif
</form>
