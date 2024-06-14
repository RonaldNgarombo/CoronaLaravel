<?php

namespace App\Livewire\Navigation;

use Livewire\Attributes\Locked;
use Livewire\Component;

class TopNavigation extends Component
{
    #[Locked] public $user;

    public function mount()
    {
        $this->user = auth()->user();
    }


    public function logoutUser()
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('login');
    }


    public function render()
    {
        return view('livewire.navigation.top-navigation');
    }
}
