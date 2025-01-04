<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserAddress extends Model
{
    protected $table = 'user_address';

    protected $fillable = [
        'user_id',
        'country',
        'city',
        'street',
        'building',
        'postcode',
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
