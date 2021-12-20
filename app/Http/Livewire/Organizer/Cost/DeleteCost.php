<?php

namespace App\Http\Livewire\Organizer\Cost;

use App\Models\Cost;
use Livewire\Component;

class DeleteCost extends Component
{
    public $cost;

    public function deleteCost()
    {
        foreach($this->cost->properties as $property) {
            $totalPrice = $property->total_price - $property->pivot->amount;
            $property->update([
                'total_price' => $totalPrice
            ]);
        }

        $this->cost->properties()->detach();
        Cost::destroy($this->cost->id);

        $this->emitUp( 'costDeleted', $this->cost->id);
    }

    public function render()
    {
        return view('livewire.organizer.cost.delete-cost');
    }
}
