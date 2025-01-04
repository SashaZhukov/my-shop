<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasFactory;
    use HasRoles;

    protected $table = 'users';

    protected $fillable = [
        'login',
        'email',
        'password',
        'first_name',
        'last_name',
        'phone',
    ];

    protected $attributes = [
        'password' => '',
    ];

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }

    public function address() : HasOne
    {
        return $this->hasOne(UserAddress::class, 'user_id', 'id');
    }
}
