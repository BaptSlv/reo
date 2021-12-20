<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id', 'type',
    ];

    public function properties()
    {
        return $this->belongsToMany(Property::class)->withPivot('id', 'name', 'amount');
    }
}
