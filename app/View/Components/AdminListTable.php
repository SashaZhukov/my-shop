<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class AdminListTable extends Component
{
    public $essences;
    public $columns;
    public $moreRoute;
    public function __construct(Collection $essences, array $columns, string $moreRoute = '')
    {
        $this->essences = $essences;
        $this->columns = $columns;
        $this->moreRoute = $moreRoute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-list-table');
    }
}
