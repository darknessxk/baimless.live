<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FileItemComponent extends Component
{
    public $info;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($info)
    {
        $this->info = $info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.file-item-component');
    }
}
