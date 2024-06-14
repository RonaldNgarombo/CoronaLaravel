<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class WebLogin extends Component
{
    #[Title('Login')]
    public function render()
    {
        return view('livewire.auth.web-login');
    }
}
