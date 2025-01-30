<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
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

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function address() : HasOne
    {
        return $this->hasOne(UserAddress::class, 'user_id', 'id');
    }

    public function store() : hasOne
    {
        return $this->hasOne(Store::class, 'owner_id', 'id');
    }
}
