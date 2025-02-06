<?php

namespace App\Services\admin;

use App\Models\Category;

class CategoryService
{
    public function create(array $data) : void
    {
        Category::create([
            'name' => $data['name'],
        ]);
    }
}


