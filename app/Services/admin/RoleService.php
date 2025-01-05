<?php

namespace App\Services\admin;

use App\Models\Role;

class RoleService
{
    public function createRole(array $data)
    {
        Role::create([
           'name' => $data['name'],
           'guard_name' => 'web'
        ]);
    }
}