<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class Chat
 *
 * @property int id
 * @property string name
 * @property int team_id
 * @property Carbon created_at
 * @property Carbon updated_at
 *
 * @method static defaultTeamChat()
 * @method static ownedChats()
 * @method static notOwnedChats()
 */

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id', 'name',
    ];

    /**
     * Scope a query to target default team chat.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeDefaultTeamChat($query)
    {
        return $query->where('team_id', '=', Auth::user()->currentTeam->id)->where('name', '=', 'Team');
    }

    /**
     * Scope a query to target chats owned by current user.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeOwnedChats($query)
    {
        return $query->where('team_id', '=', Auth::user()->currentTeam->id)->whereHas('users', function ($q){
            $q->where('user_id', Auth::user()->id)->where('isOwner', 1);
        });
    }

    /**
     * Scope a query to target chats not owned by current user.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeNotOwnedChats($query)
    {
        return $query->where('team_id', '=', Auth::user()->currentTeam->id)->whereHas('users', function ($q){
            $q->where('user_id', Auth::user()->id)->where('isOwner', 0);
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('isOwner');
    }

}
