<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    protected $fillable = [
        'parent_added',
        'name',
        'store',
        'size',
        'color',
        'link',
        'price',
        'purchased',
    ];

    public function kid(): BelongsTo
    {
        return $this->belongsTo(Kid::class);
    }

    protected function casts(): array
    {
        return [
            'parent_added' => 'bool',
            'name' => 'string',
            'store' => 'string',
            'size' => 'string',
            'color' => 'string',
            'link' => 'string',
            'price' => 'int',
            'purchased' => 'boolean',
        ];
    }
}
