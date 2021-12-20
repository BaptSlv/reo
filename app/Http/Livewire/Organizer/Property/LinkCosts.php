<?php

namespace App\Http\Livewire\Organizer\Property;

use App\Models\Cost;
use App\Models\CostProperty;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;

class LinkCosts extends Component
{
    public $addCosts = false;
    public $property;
    public $name;
    public $amount;
    public $type;

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    protected function rules()
    {
        $teamCosts = Cost::query()->where('team_id', '=', Auth::user()->currentTeam->id)->pluck('id')->toArray();

        return [
            'name' => [
                'nullable','max:50'
            ],
            'amount' => [
                'required', 'max:8'
            ],
            'type' => [
                'required',
                Rule::in($teamCosts)
            ],
        ];
    }

    public function addCosts()
    {
        $this->addCosts = true;
    }

    public function linkCost()
    {
        $validatedData = $this->validate();

        CostProperty::create([
            'cost_id' => $validatedData['type'],
            'property_id' => $this->property->id,
            'name' => $validatedData['name'],
            'amount' => $validatedData['amount'],
        ]);

        $this->property->update([
            'total_price' => $this->property->total_price + $validatedData['amount']
        ]);

        return redirect()->to('/organizer/property/' . $this->property->id);
    }

    public function render()
    {
        return view('livewire.organizer.property.link-costs', [
            'costs' => Cost::query()->where('team_id', '=', Auth::user()->currentTeam->id)->get(),
        ]);
    }
}
