<?php

namespace App\Http\Livewire\Teamchat;

use App\Models\ChatUser;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ManageMembers extends Component
{
    public $newMembers;
    public $targetedChatOwner;
    public $targetedChat;
    public $newMember;
    public $manageMembers = false;

    protected $listeners = [
        'memberAdded' => '$refresh',
        'leaveChat' => '$refresh',
    ];

    public function manageMembers()
    {
        $this->manageMembers = true;
    }

    public function leaveChat()
    {
        $this->targetedChat->users()->detach(Auth::user()->id);

        return redirect()->to('/teamchat');
    }

    public function addMember()
    {
        ChatUser::create([
            'chat_id' => $this->targetedChat->id,
            'user_id' => $this->newMember,
            'isOwner' => 0
        ]);

        $this->manageMembers = false;

        $this->emitSelf('memberAdded');
    }

    public function mount()
    {
        $this->newMembers = Auth::user()->currentTeam->allUsers()->diff($this->targetedChat->users);
        $this->targetedChatOwner = $this->targetedChat->users()->wherePivot('isOwner', '=', 1)->first();
    }

    public function render()
    {
        return view('livewire.teamchat.manage-members');
    }
}
