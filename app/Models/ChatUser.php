<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class ChatUser
 *
 * @property int id
 * @property int chat_id
 * @property int user_id
 * @property boolean isOwner
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class ChatUser extends Pivot
{
    use HasFactory;

    protected $fillable = ['chat_id', 'user_id', 'isOwner'];
}
