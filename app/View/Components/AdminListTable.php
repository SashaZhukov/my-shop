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
    public function __construct(Collection $entities, string $moreRoute = '')
    {
        $this->entities = $entities;
        $this->columns = $this->defineColumns();
        $this->moreRoute = $moreRoute;
    }

    public function defineColumns()
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
                'category' => 'Category',
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

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-list-table');
    }
}
