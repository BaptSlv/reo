<?php

namespace App\Http\Livewire\Organizer\Cost;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditCost extends Component
{

    public $cost;
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
        'type.required' => 'The type cannot be empty.',
        'type.unique' => 'The cost already exist.',
    ];

    public function editCost()
    {
        $validatedData = $this->validate();

        $this->cost->update([
            'type' => $validatedData['type']
        ]);

        $this->emitUp( 'costEdited', $this->cost->id);
    }

    public function render()
    {
        return view('livewire.organizer.cost.edit-cost');
    }
}
