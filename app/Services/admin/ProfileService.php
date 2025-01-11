<?php

namespace App\Services\admin;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileService
{
    public function filteredNameUpdateRequest(Request $request, User $user)
    {
        return collect($request)->filter(function ($value, $key) use ($user) {
            return $value !== '' && $value !== null;
    })->toArray();
    }

     public function update(User $user, array $data) : void
     {
            $validatedData = validator($data, [
                'first_name' => ['string', 'max:64'],
                'last_name' => ['string', 'max:64'],
            ])->validate();

            $user->update($validatedData);
     }
}

