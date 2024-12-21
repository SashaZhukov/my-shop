<?php

namespace App\Services\admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserService
{
    public function createUser(array $data)
    {
        $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => Role::getRoleId($data['role']),
            'model_type' => User::class,
            'model_id' => $user->id,
        ]);

    }
}
