<?php

namespace App\View\Components;

use App\Models\Information as ModelsInformation;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Information extends Component
{
    public $informations;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->informations = ModelsInformation::get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.information');
    }
}
