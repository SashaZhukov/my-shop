<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Services\admin\ProfileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function index() : View
    {
        $user = Auth::user();
        return view('admin.profile.view', compact('user'));
    }

    public function edit() : View
    {
        $user = User::where('id', Auth::id())->first();

        return view('admin.profile.edit.name', compact('user'));
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $data = $this->profileService->filteredNameUpdateRequest($request, $user);

        if (empty($data)) {
            return redirect('admin.profile', $user);
        }

        $this->profileService->update($user, $data);

        return redirect()->route('admin.profile', $user->id);
    }

    public function logout(Request $request) : RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('homePage');
    }
}
