<?php

namespace App\Http\Livewire\Teamchat;

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateChat extends Component
{
    public $addChat = false;
    public $name;

    protected function rules()
    {
        return [
            'name' => 'max:20',
        ];
    }

    public function addChat()
    {
        $this->addChat = true;
    }

    public function createChat()
    {
        $validatedData = $this->validate();

        $chat = Chat::create([
            'team_id' => Auth::user()->currentTeam->id,
            'name' => $validatedData['name'],
        ]);

        $chat->users()->attach(Auth::user()->id, ['isOwner' => 1]);

        $this->addChat = false;
        $this->name = '';

        $this->emitUp('chatCreated');
    }

    public function render()
    {
        return view('livewire.teamchat.create-chat');
    }
}
