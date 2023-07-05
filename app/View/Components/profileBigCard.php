<?php

namespace App\View\Components;

use Illuminate\View\Component;

class profileBigCard extends Component
{
    public $article;
    public function __construct($article)
    {
        $this->article = $article;
    }

    public function render()
    {
        return view('components.profile-big-card');
    }
}