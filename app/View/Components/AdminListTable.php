<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class AdminListTable extends Component
{
    public $entities;
    public $columns;
    public $moreRoute;
    public function __construct(Collection $entities)
    {
        $this->entities = $entities;
        $this->columns = $this->defineColumns();
        $this->moreRoute = $this->defineMoreRoute();
    }

    public function defineColumns() : array
    {
        $model = $this->entities->first();

        return match ($model ? get_class($model) : null) {
            \App\Models\User::class => [
                'id' => 'ID',
                'login' => 'Login',
                'email' => 'Email',
                'role' => 'Role',
            ],
            \App\Models\Role::class => [
                'id' => 'ID',
                'name' => 'Name',
                'guard_name' => 'Guard Name',
                'created_at' => 'Created At',
                'updated_at' => 'Updated At',
            ],
            \App\Models\Store::class => [
                'id' => 'ID',
                'name' => 'Name',
                'category_id' => 'Category',
                'phone' => 'Phone',
            ],
            \App\Models\Category::class => [
                'id' => 'ID',
                'name' => 'Name',
                'created_at' => 'Created At',
                'updated_at' => 'Updated At',
            ],
            default => [],
        };
    }

    public function defineMoreRoute() : string
    {
        $model = $this->entities->first();

        return match ($model ? get_class($model) : null) {
            \App\Models\User::class => 'user.view',
            \App\Models\Store::class => '',
            \App\Models\Role::class => '',
            \App\Models\Category::class => '',
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-list-table');
    }
}
