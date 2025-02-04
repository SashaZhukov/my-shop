<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\View\View;

class StoreController extends Controller
{
    public function index() : View
    {
        $stores = Store::all();

        $moreRoute = 'admin.stores.view';

        return view('admin.products.stores.list', compact('stores', 'moreRoute'));
    }
}
