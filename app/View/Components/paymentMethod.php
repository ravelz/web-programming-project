<?php

namespace App\View\Components;

use Illuminate\View\Component;

class paymentMethod extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     * 
     */

    public $payId;
    public $radioCheck;
    public function __construct($payId, $radioCheck)
    {
        $this->payId = $payId;
        $this->radioCheck = $radioCheck;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.payment-method');
    }
}
