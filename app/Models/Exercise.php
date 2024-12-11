<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Exercise extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
