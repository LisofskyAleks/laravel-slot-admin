<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public array $menu;

    public function __construct()
    {
        $this->menu = config('sidebar');
    }

    public function render()
    {
        return view('components.sidebar');
    }
}
