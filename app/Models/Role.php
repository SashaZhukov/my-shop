<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'id',
        'name',
        'guard_name',
        ];

    static function getRoleId(string $name)
    {
        $role = Role::where('name', $name)->first();
        return $role->id;
    }
}
