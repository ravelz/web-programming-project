<?php

namespace App\View\Components;

use Illuminate\View\Component;

class draftItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $draft;
    public function __construct($draft)
    {
        $this->draft = $draft;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.draft-item');
    }
}
