<?php

namespace App\Http\Livewire\Organizer\Cost;

use App\Models\Cost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CreateCost extends Component
{

    public $type;

    protected function rules()
    {
        return [
            'type' => [
                'required',
                'string',
                Rule::unique('costs')->where(function ($query) {
                    return $query->where('type', $this->type)
                        ->where('team_id', Auth::user()->currentTeam->id);
                })
            ],
        ];
    }

    protected $messages = [
        'type.required' => 'The type field cannot be empty.',
        'type.unique' => 'The cost already exist.',
    ];

    public function createCost()
    {
        $validatedData = $this->validate();

        Cost::create([
            'team_id' => Auth::user()->currentTeam->id,
            'type' => strtolower(str_replace(' ', '_', $validatedData['type'])),
        ]);

        $this->reset('type');
        $this->emitUp( 'costCreated');
    }

    public function render()
    {
        return view('livewire.organizer.cost.create-cost');
    }
}
