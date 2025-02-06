<?php

namespace App\Services\admin;

use App\Models\Store;
use Illuminate\Support\Facades\Auth;

class StoreService
{
    public function create(array $data) : void
    {
        Store::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'owner_id' => Auth::id(),
            'category_id' => $data['category_id'],
        ]);
    }
}
