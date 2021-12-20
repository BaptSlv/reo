<?php

namespace App\Http\Livewire\Organizer\Property;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProperties extends Component
{
    use WithPagination;

    public $search = '';
    public $showCosts = 0;

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function showPropertyCosts($propertyId)
    {
        if($this->showCosts === 0){
            $this->showCosts = $propertyId;
        } elseif($this->showCosts === $propertyId) {
            $this->showCosts = 0;
        } else {
            $this->showCosts = $propertyId;
        }
    }

    // updating is a Livewire lifecycle method
    public function updating($name, $value)
    {
        if($name === 'search') {
            $this->resetPage();
        }
    }

    public function render()
    {
        return view('livewire.organizer.property.show-properties', [
            'properties' => Auth::user()->currentTeam->properties()->orderBy('created_at', 'DESC')->with('costs')->where('label', 'LIKE', "%{$this->search}%")->paginate(3),
        ]);
    }
}
