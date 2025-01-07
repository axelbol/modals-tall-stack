<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteUser extends Component
{
    public $showModal = false;

    public function render()
    {
        return view('livewire.delete-user');
    }
}
