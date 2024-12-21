<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CreateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Services\admin\UserService;
use \Illuminate\Http\Request;

class AdminUserController extends Controller
{
    protected $userService;

   public function __construct(UserService $userService)
   {
       $this->userService = $userService;
   }

    public function index()
    {
        $users = User::all();

        return view('admin.users.list', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('admin.users.add', compact('roles'));
    }

    public function store(CreateUserRequest $request)
    {
        $data = $request->validated();

        $this->userService->createUser($data);

        return redirect()->route('users.index');
    }
}
