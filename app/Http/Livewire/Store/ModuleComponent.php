<?php

namespace App\Http\Livewire\Store;

use App\Models\Module;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ModuleComponent extends Component
{
    public function activate(Module $module)
    {
        if($module) {
            Auth::user()->currentTeam->modules()->attach($module);
            $this->emit( 'refreshNav');
        } else {
            abort(403);
        }
    }

    public function deactivate(Module $module)
    {
        if($module) {
            Auth::user()->currentTeam->modules()->detach($module);
            $this->emit('refreshNav');
        } else {
            abort(403);
        }
    }

    public function render()
    {
        return view('livewire.store.module-component',
            [
                'modules' => Module::all()
            ]
        );
    }
}
