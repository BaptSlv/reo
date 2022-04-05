<?php

namespace App\Http\Livewire\Teamchat;

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowChats extends Component
{
    public $targetedChat;
    public $countUserChat;
    public $defaultTeamChat;
    public $ownedChats;
    public $otherChats;

    protected $listeners = [
        'chatCreated' => '$refresh',
    ];

    public function showChat(Chat $teamChat)
    {
        $this->targetedChat = $teamChat;
    }

    public function mount()
    {
        $this->countUserChat = Auth::user()->chats()->where('team_id', '=', Auth::user()->currentTeam->id)->count();

        $this->defaultTeamChat = Chat::defaultTeamChat()->first();
        $this->ownedChats = Chat::ownedChats()->get();
        $this->otherChats = Chat::notOwnedChats()->where('name', '!=', $this->defaultTeamChat->name)->get();
        // $this->otherChats = Auth::user()->chats()->wherePivot('isOwner', '=', 0)->where('team_id', '=', Auth::user()->currentTeam->id)->where('chat_id', '!=', $this->defaultTeamChat->id)->get();
    }

    public function render()
    {
        return view('livewire.teamchat.show-chats');
    }
}
