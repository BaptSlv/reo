<?php

namespace App\Http\Livewire\Teamchat;

use Livewire\Component;

class OpenChat extends Component
{
    public $targetedChat;

    protected $listeners = [
        'echo:teamchat,TeamchatMessageEvent' => '$refresh',
        'messageAdded' => '$refresh',
    ];

    public function render()
    {
        $messages = $this->targetedChat->messages()->orderBy('created_at', 'desc')->limit(10)->get()->reverse();

        return view('livewire.teamchat.open-chat', [
            'messages' => $messages
        ]);
    }
}
