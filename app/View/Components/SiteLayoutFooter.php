<?php

namespace App\View\Components;

use App\Models\Post;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SiteLayoutFooter extends Component
{
    public $authors_count;
    public $posts_count;
    public function __construct()
    {
        $this->authors_count = User::count();
        $this->posts_count = Post::count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.site-footer');
    }
}
