<?php

namespace App\View\Components;

use Illuminate\View\Component;

class worker extends Component
{

    public $item = [];

    /**
     * @param array $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.worker');
    }
}
