<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CreateRoleRequest;
use App\Models\Role;
use App\Services\admin\RoleService;

class RolesController extends Controller
{

    private $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function index()
    {
        $roles = Role::all();
        $columns = [
            'id' => 'ID',
            'name' => 'Name',
            'guard_name' => 'Guard Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
        $moreRoute = '';

        return view('admin.roles.list', compact('roles', 'columns'));
    }

    public function create()
    {
        return view('admin.roles.add');
    }

    public function store(CreateRoleRequest $request)
    {
        $data = $request->validated();

        $this->roleService->createRole($data);

        return redirect()->route('roles.index');
    }
}
