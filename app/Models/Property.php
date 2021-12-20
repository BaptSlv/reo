<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = ['label', 'image', 'address_1', 'address_2', 'zipcode', 'city', 'country', 'area', 'purchase_price','total_price', 'currency', 'status', 'selling_price'];

    const IMAGE_LINK = 'images/default.svg';

    const STATUS_AVAILABLE = 'available';
    const STATUS_SOLD = 'sold';
    const STATUS_MANAGED = 'managed';
    const STATUS_INHABITED = 'inhabited';

    const STATUS = [
        'available' => self::STATUS_AVAILABLE,
        'sold' => self::STATUS_SOLD,
        'managed' => self::STATUS_MANAGED,
        'inhabited' => self::STATUS_INHABITED,
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function costs()
    {
        return $this->belongsToMany(Cost::class)->withPivot('id', 'name', 'amount');
    }
}
