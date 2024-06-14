<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class WebRegister extends Component
{
    #[Title('Register')]
    public function render()
    {
        return view('livewire.auth.web-register');
    }
}
