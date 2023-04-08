<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.components.header');
    }
}
