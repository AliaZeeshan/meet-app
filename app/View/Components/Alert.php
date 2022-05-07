<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component

{
    public $alertStyle;
    public $message;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($firstName = null,$lastName = null,$alertStyle = null,$message = null)
    {
        $this->alertStyle=$alertStyle;
        $this->message=$message;
        $this->name=$firstName.' '.$lastName;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
    public function showName(){
        return $this->name;
    }
}
