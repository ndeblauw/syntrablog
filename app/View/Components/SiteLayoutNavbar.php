<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SiteLayoutNavbar extends Component
{
    public $menu;
    public function __construct()
    {
        $this->menu = [
            ['label' => 'Welcome', 'link' => '/',],
            ['label' => 'Posts', 'link' => '/posts'],
            ['label' => 'Categories', 'link' => '/categories'],
            ['label' => 'Authors', 'link' => '/authors'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.site-layout-navbar');
    }
}
