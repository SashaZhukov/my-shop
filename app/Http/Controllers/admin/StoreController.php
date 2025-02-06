<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CreateStoreRequest;
use App\Models\Category;
use App\Models\Store;
use App\Services\admin\StoreService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class StoreController extends Controller
{
    private $storeService;

   public function __construct(StoreService $storeService)
   {
       $this->storeService = $storeService;
   }

    public function index() : View
    {
        $stores = Store::all();

        $moreRoute = 'admin.stores.view';

        return view('admin.products.stores.list', compact('stores', 'moreRoute'));
    }

    public function create() : View
    {
        $categories = Category::all();

        return view('admin.products.stores.add', compact('categories'));
    }

    public function store(CreateStoreRequest $request) : RedirectResponse
    {
        $data = $request->validated();

        $this->storeService->create($data);

        return redirect()->route('stores.index');
    }
}
