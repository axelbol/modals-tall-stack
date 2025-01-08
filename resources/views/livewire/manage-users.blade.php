<div>
    @foreach ($users as $user)
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <img class="size-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm/6 font-semibold text-gray-900">{{ $user->name }}</p>
                    <p class="mt-1 truncate text-xs/5 text-gray-500">{{ $user->email }}</p>
                </div>
            </div>
            <div class="flex items-center justify-between space-x-4">
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm/6 text-gray-900">Co-Founder / CEO</p>
                    {{-- <button class="text-indigo-400 hover:text-indigo-800" wire:click="$set('showDeleteUserModal', true)">Delete</button> --}}
                    <button class="text-indigo-400 hover:text-indigo-800" wire:click="confirmDelete({{ $user->id }})">Delete</button>
                </div>
            </div>
        </li>
    @endforeach

    {{-- MODAL --}}
    {{-- <x-confirmation-modal wire:model.defer="showDeleteUserModal">
        <x-slot name="title">
            Delete {{ $currentUser->name }}
        </x-slot>

        <x-slot name="body">
            If you proceed, the entire work will be deleted.
        </x-slot>

        <x-slot name="footer">
            <x-button class="bg-gray-400 hover:bg-gray-500" wire:click="$set('showDeleteUserModal', false)">Cancel</x-button>
            <x-button class="bg-blue-400 hover:bg-blue-500" wire:click="delete">Continue</x-button>
        </x-slot>
    </x-confirmation-modal> --}}

    {{-- FORM --}}
    <form wire:submit.prevent="delete">
        <x-confirmation-modal wire:model.defer="showDeleteUserModal">
            <x-slot name="title">
                Delete {{ $currentUser->name }}
            </x-slot>

            <x-slot name="body">
                If you proceed, the entire work will be deleted.
            </x-slot>

            <x-slot name="footer">
                <x-button class="bg-gray-400 hover:bg-gray-500" wire:click="$set('showDeleteUserModal', false)">Cancel</x-button>
                <x-button type="submit" class="bg-blue-400 hover:bg-blue-500">Continue</x-button>
            </x-slot>
        </x-confirmation-modal>
    </form>
</div>
