<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $message;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}




class Person
{
    public string $name;
    public string $height;

    public function __construct($name, $height)
    {
        $this->name = $name;
        $this->height = $height;
    }
}

$person1 = new Person('Basson', '1.8m');
$person1 = new Person('Johan', '1m');
$person1 = new Person('Gert', '8m');
