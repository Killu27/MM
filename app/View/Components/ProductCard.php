<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
    public $name;
    public $cost;
    public $amount;

    public function __construct($name, $cost, $amount)
    {
        $this->name = $name;
        $this->cost = $cost;
        $this->amount = $amount;
    }

    public function render()
    {
        return view('components.product-card');
    }
}
