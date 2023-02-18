<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;

class UserDashboard extends Component
{
    public function render()
    {
        return view('livewire.user.user-dashboard', [
            'users' => User::paginate(5)
        ]);
    }
}
