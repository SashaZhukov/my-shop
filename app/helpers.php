<?php

use App\Models\Role;
use App\Models\User_Role;
use App\Models\Category;

if (!function_exists('getUserRole')) {
    function getUserRole($userId) {
        $userRole = User_Role::where('model_id', $userId)->first();

        if ($userRole) {
            $roleId = $userRole->role_id;
            $role = Role::where('id', $roleId)->first();

            if ($role) {
                return $role->name;
            }
        }

    }

if (!function_exists('getCategoryName')) {
    function getCategoryName($categoryId) {
        $category = Category::where('id', $categoryId)->first();

        if ($category) {
            return $category->name;
        }
    }
}
}
