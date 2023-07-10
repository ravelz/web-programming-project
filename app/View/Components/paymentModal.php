<?php

namespace App\View\Components;

use Illuminate\View\Component;

class paymentModal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     * 
     */

    public $methodId;
    public $role;
    public $paket;
    public function __construct($methodId, $role, $paket)
    {
        $this->methodId = $methodId;
        $this->role = $role;
        $this->paket = $paket;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.payment-modal');
    }
}
