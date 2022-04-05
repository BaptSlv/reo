<?php

namespace App\Http\Livewire\Teamchat;

use App\Events\TeamchatMessageEvent;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SendMessage extends Component
{
    public $targetedChat;
    public $message = '';

    protected $rules = [
        'message' => ['required', 'string', 'max:200'],
    ];

    public function addTeamchatMessage()
    {
        $validatedData = $this->validate();

        Message::create([
            'chat_id' => $this->targetedChat->id,
            'user_id' => Auth::user()->id,
            'message' => $validatedData['message'],
        ]);

        event(new TeamchatMessageEvent);

        $this->emitUp( 'messageAdded');
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.teamchat.send-message');
    }
}
