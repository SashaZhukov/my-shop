<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CreateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Services\admin\UserService;
use http\Url;
use \Illuminate\Http\Request;
use function Laravel\Prompts\error;

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

    public function view($id)
    {
        $user = User::with('address')->find($id);

        return view('admin.users.view', compact('user'));
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

    public function edit(Request $request, User $user)
    {
        if ($request->get('block') == 'personalInfo') {
            $block = $request->get('block');
            return view('admin.users.userEdit.personalInfo', compact('user', 'block'));
        }

        if ($request->get('block') == 'userAddress') {
            $user = User::with('address')->find($user->id);
            $block = $request->get('block');
            return view('admin.users.userEdit.AddressEdit', compact('user', 'block'));
        }

        if ($request->get('block') == 'securityAndOther') {
            $block = $request->get('block');
            $roles = Role::all();
            return view('admin.users.userEdit.securityAndOther', compact('user', 'block', 'roles'));
        }
    }

    public function update(Request $request, User $user, string $block)
    {
        $filteredData = $this->userService->filterUserData($request->except(['_token', '_method']), $user, $block);

        if (empty($filteredData)) {
            return redirect()->route('user.view', $user);
        }

        $this->userService->updatePersonalInfo($filteredData, $user, $block);

        return redirect()->route('user.view', $user);
    }
}
