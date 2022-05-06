<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlertMessage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<div>
    <h2>Simplicity is the essence of happiness. - Cedric Bledsoe </h2>
</div>
blade;
    }
}
