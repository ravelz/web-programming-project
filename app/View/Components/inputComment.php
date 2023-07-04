<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputComment extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $inputComment;
    public function __construct($inputComment)
    {
        $this->inputComment = $inputComment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-comment');
    }
}
