<?php

namespace App\Services\admin;

use App\Models\Role;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function createUser(array $data) : void
    {
        $user = User::create([
        'login' => $data['login'],
        'email' => $data['email'],
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'phone' => $data['phone'],
        'password' => bcrypt($data['password']),
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => Role::getRoleId($data['role']),
            'model_type' => User::class,
            'model_id' => $user->id,
        ]);

    }

    public function filterUserData(array $request, User $user, string $block) : array
    {
        if ($block === 'personalInfo') {
            return collect($request)->filter(function ($value, $key) use ($user) {
                return $value !== null && $value !== '' && $value !== $user->{$key};
            })->toArray();
        }

        if ($block === 'userAddress') {
            return collect($request)->filter(function ($value, $key) use ($user) {
                return $value !== null && $value !== '' && $value !== $user->address->{$key};
            })->toArray();
        }

        if ($block === 'securityAndOther') {
            return collect($request)->filter(function ($value, $key) use ($user) {
                if ($key === 'role') {
                    return $value !== getUserRole($user->id);
                } elseif ($key === 'password') {
                    return $value !== $user->password;
                }
            })->toArray();
        }
    }

    public function updatePersonalInfo(array $data, User $user, string $block) : void
    {
        if ($block === 'personalInfo') {
            $validatetData = validator($data, [
                'login' => ['string', 'max:32', 'min:2'],
                'email' => ['email', 'unique:users,email,', 'max:255'],
                'first_name' => ['string', 'max:32'],
                'last_name' => ['string', 'max:32'],
                'phone' => ['string', 'max:32', 'unique:users,phone'],
            ])->validate();

            $user->update($validatetData);
        }

        if ($block === 'userAddress') {
            $validatetData = validator($data, [
                'country' => ['string', 'max:64'],
                'city' => ['string', 'max:32'],
                'street' => ['string', 'max:64'],
                'building' => ['string'],
                'postcode' => ['int', 'max:64'],
            ])->validate();

            $address = UserAddress::where('user_id', $user->id);

            $address->update($validatetData);
        }

        if ($block === 'securityAndOther') {
            $validatetData = validator($data, [
                'role' => ['string', 'max:32'],
                'password' => ['string', 'min:8', 'max:32'],
            ])->validate();

            if (array_key_exists('role', $validatetData)) {
                $user->syncRoles([]);
                $user->assignRole($validatetData['role']);
            }

            if (array_key_exists('password', $validatetData)) {
                $user->update(['password' => Hash::make($validatetData['password'])]);
            }
        }
    }
}
