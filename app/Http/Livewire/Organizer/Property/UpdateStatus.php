<?php

namespace App\Http\Livewire\Organizer\Property;

use App\Models\Property;
use Livewire\Component;

class UpdateStatus extends Component
{
    public $property;

    public $listeners = [
        'refresh' => '$refresh',
    ];

    public function changeStatus(Property $property, $status)
    {
        $propertiesStatus = Property::STATUS;

        if (in_array($status, $propertiesStatus)) {
            $property->update([
                'status' => $status
            ]);

            $this->emitUp('refresh');
            $this->emitSelf('refresh');
        } else {
            abort(403);
        }
    }

    public function render()
    {
        return view('livewire.organizer.property.update-status', [
            'propertiesStatus' => Property::STATUS,
        ]);
    }
}
