<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavComponent extends Component
{
    protected $listeners = ['refreshNav' => '$refresh'];

    public function render()
    {
        return view('livewire.nav-component');
    }
}
