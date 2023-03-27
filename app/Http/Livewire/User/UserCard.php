<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserCard extends Component
{
    public $user;

    protected $listeners = ['refreshComponent' => 'mount'];

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.user.user-card');
    }
}
