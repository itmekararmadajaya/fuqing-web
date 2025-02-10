<?php

namespace App\View\Components;

use App\Models\Event as ModelsEvent;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Event extends Component
{
    public $events;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->events = ModelsEvent::get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.event');
    }
}
