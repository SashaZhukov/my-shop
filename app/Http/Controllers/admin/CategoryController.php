<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CreateRoleRequest;
use App\Models\Category;
use App\Services\admin\CategoryService;
use Illuminate\View\View;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index() : View
    {
        $categories = Category::all();

        return view('admin.products.categories.list', compact('categories'));
    }

    public function create() : View
    {
        return view('admin.products.categories.add ');
    }

    public function store(CreateRoleRequest $request) : View
    {
        $data = $request->validated();

        $this->categoryService->create($data);
        $categories = Category::all();

        return view('admin.products.categories.list', compact('categories'));
    }
}
