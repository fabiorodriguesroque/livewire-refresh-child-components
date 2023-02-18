<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserDashboard extends Component
{
    public function render()
    {
        $users = User::whereNot('id', Auth::id())->paginate(5);

        return view('livewire.user.user-dashboard', [
            'users' => $users,
        ]);
    }
}
