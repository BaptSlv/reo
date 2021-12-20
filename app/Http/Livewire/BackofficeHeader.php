<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BackofficeHeader extends Component
{
    public $totalProperties;
    public $totalAmountSpent;
    public $currency;

    public function mount()
    {
        $properties = Auth::user()->currentTeam->properties;

        if($properties->isNotEmpty()){
            $this->totalProperties = $properties->where('status', '!=', 'sold')->count();

            $this->currency = $properties->first()->currency;

            $total = 0;

            foreach ($properties as $property) {
                foreach ($property->costs as $cost) {
                    $total = $total + $cost->pivot->amount;
                }
                $total = $total + $property->purchase_price;
            }

            $this->totalAmountSpent = $total;
        }

    }

    public function render()
    {
        return view('livewire.backoffice-header');
    }
}
