<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kid extends Model
{
    protected $fillable = [
        'name',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
}
