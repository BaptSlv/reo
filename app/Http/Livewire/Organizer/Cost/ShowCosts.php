<?php

namespace App\Http\Livewire\Organizer\Cost;

use App\Models\Cost;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowCosts extends Component
{

    public $editId = 0;
    public $deleteId = 0;
    public $showProperties = 0;

    protected $listeners = [
        'costCreated' => '$refresh',
        'costEdited' => 'showEditCost',
        'costDeleted' => 'showDeleteCost',
        ];

    public function showCostProperties($costId)
    {
        $this->deleteId = 0;
        $this->editId = 0;

        if($this->showProperties === 0){
            $this->showProperties = $costId;
        } elseif($this->showProperties === $costId) {
            $this->showProperties = 0;
        } else {
            $this->showProperties = $costId;
        }
    }

    public function showEditCost($costId)
    {
        $this->deleteId = 0;
        $this->showProperties = 0;

        if($this->editId === 0){
            $this->editId = $costId;
        } elseif($this->editId === $costId) {
            $this->editId = 0;
        } else {
            $this->editId = $costId;
        }
    }

    public function showDeleteCost($costId)
    {
        $this->editId = 0;
        $this->showProperties = 0;

        if($this->deleteId === 0){
            $this->deleteId = $costId;
        } elseif($this->deleteId === $costId) {
            $this->deleteId = 0;
        } else {
            $this->deleteId = $costId;
        }
    }

    public function render()
    {
        return view('livewire.organizer.cost.show-costs', [
            'teamCosts' => Cost::query()->where('team_id', '=', Auth::user()->currentTeam->id)->get()
        ]);
    }
}
