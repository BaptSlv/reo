<?php

namespace App\Http\Livewire\Organizer;

use App\Models\Module;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class NavComponent extends Component
{
    public $currentModule;

    public function render()
    {
        if(Route::has('organizer')) {
            $this->currentModule = Module::query()->where('namespace', '=', 'organizer')->first();
        }

        return view('livewire.organizer.nav-component');
    }
}