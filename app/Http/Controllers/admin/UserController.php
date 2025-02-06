<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CreateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Services\admin\UserService;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use \Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    protected $userService;

   public function __construct(UserService $userService)
   {
       $this->userService = $userService;
   }

    public function index() : View
    {
        $users = User::all();
        $moreRoute = 'user.view';

        return view('admin.users.list', compact('users', 'moreRoute'));
    }

    public function view($id) : View
    {
        $user = User::with('address')->find($id);

        return view('admin.users.view', compact('user'));
    }

    public function create() : View
    {
        $roles = Role::all();

        return view('admin.users.add', compact('roles'));
    }

    public function store(CreateUserRequest $request) : RedirectResponse
    {
        $data = $request->validated();

        $this->userService->createUser($data);

        return redirect()->route('users.index');
    }

    public function edit(Request $request, User $user) : View
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

    public function update(Request $request, User $user, string $block) : RedirectResponse
    {
        $filteredData = $this->userService->filterUserData($request->except(['_token', '_method']), $user, $block);

        if (empty($filteredData)) {
            return redirect()->route('user.view', $user);
        }

        $this->userService->updatePersonalInfo($filteredData, $user, $block);

        return redirect()->route('user.view', $user);
    }

    public function getSuggestion(Request $request) : JsonResponse
    {
        $query = $request->input('query');

        $users = User::where('login', 'LIKE', '%' . $query . '%')->limit(5)->pluck('login');

        return response()->json(['suggestions' => $users]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $users = User::where('login', $query)->get();

        if ($users->isEmpty()) {
            return view('admin.users.list')->withErrors(['UserNotFound' => 'User not found.']);
        }

        $moreRoute = 'user.view';

        return view('admin.users.list', compact('users', 'moreRoute'));
    }
}
