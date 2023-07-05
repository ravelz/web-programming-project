<?php

namespace App\View\Components;

use Illuminate\View\Component;

class profileStatsAtt extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $angka;
    public $att;
    public function __construct($angka, $att)
    {
        $this->angka = $angka;
        $this->att = $att;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profile-stats-att');
    }
}
