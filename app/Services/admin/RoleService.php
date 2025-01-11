<?php

namespace App\Services\admin;

use App\Models\Role;

class RoleService
{
    public function createRole(array $data) : void
    {
        Role::create([
           'name' => $data['name'],
           'guard_name' => 'web'
        ]);
    }
}
