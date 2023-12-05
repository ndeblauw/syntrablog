<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInput extends Component
{
    public string $name;
    public string $placeholder;
    public string $label;
    public ?string $value;
    public function __construct(string $name, string $placeholder, string $value = null, string $label = null)
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->label = $label ?? ucfirst($name);
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-input');
    }
}
