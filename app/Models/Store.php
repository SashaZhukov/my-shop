<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Store extends Model
{
    protected $table = 'stores';

    protected $fillable = [
        'name',
        'phone',
        'owner_id',
        'working_hours',
        'category_id',
        'rating',
    ];


    public function owner() : BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id', 'owner_id');
    }
}
