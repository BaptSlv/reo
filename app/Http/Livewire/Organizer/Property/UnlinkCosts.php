<?php

namespace App\Http\Livewire\Organizer\Property;

use App\Models\CostProperty;
use Livewire\Component;

class UnlinkCosts extends Component
{
    public $property;
    public $cost;
    public $pivotId;
    public $removeCosts = false;

    public function removeCosts()
    {
        $this->removeCosts = true;
    }

    public function unlinkCost(CostProperty $pivotCost)
    {
        $this->property->update([
            'total_price' => $this->property->total_price - $pivotCost->amount,
        ]);

        $pivotCost->delete();

        return redirect()->to('/organizer/property/' . $this->property->id);
    }


    public function render()
    {
        $pivotCost = CostProperty::findOrFail($this->pivotId);

        return view('livewire.organizer.property.unlink-costs', [
            'pivotCost' => $pivotCost,
        ]);
    }
}
