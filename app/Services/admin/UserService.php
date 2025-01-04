<?php

namespace App\Services\admin;

use App\Models\Role;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\error;

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
    }
}
