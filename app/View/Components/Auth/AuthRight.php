<?php

namespace App\View\Components\Auth;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthRight extends Component
{
    public $heading;
    public $authtext;
    /**
     * Create a new component instance.
     */
    public function __construct($heading = "Login", $authtext = "Input your credentials to login")
    {
        $this->heading = $heading;
        $this->authtext = $authtext;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.auth.auth-right');
    }
}