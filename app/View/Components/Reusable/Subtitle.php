<?php

namespace App\View\Components\Reusable;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Subtitle extends Component
{
    public $subtitle;

    /**
     * Create a new component instance.
     */
    public function __construct($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.reusable.subtitle');
    }
}
