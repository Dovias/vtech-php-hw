<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class NavigationBar extends Component
{
    // I hate how there's no generics like in java: Collection<Route> in PHP :(
    public Collection $routes;

    /**
     * Create a new component instance.
     */
    public function __construct($routes)
    {
        $this->routes = $routes;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navigation-bar');
    }
}
