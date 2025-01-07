<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteUser extends Component
{
    public $showModal = false;

    public function handle()
    {
        dd('delete-user');
    }

    public function render()
    {
        return view('livewire.delete-user');
    }
}
