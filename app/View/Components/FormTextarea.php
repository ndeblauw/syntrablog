<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormTextarea extends Component
{
    public string $name;
    public string $placeholder;
    public string $label;
    public function __construct(string $name, string $placeholder, string $label = null)
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->label = $label ?? ucfirst($name);
    }

    public function render(): View|Closure|string
    {
        return view('components.form-textarea');
    }
}
