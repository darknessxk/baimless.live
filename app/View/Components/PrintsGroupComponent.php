<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PrintsGroupComponent extends Component
{
    public $list;
    public $desc;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($list, $desc)
    {
        $this->list = $list;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.prints-group-component');
    }
}
