<?php

namespace App\View\Components;

use Illuminate\View\Component;

class IsiArticle extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $dataArticle;
    public $tag;
    public function __construct($dataArticle, $tag)
    {
        $this->dataArticle = $dataArticle;
        $this->tag = $tag;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.isi-article');
    }
}
