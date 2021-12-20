<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CostProperty extends Pivot
{
    protected $filllable = ['name', 'amount'];
}
