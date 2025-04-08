<?php

namespace App\View\Components\Auth;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use function PHPSTORM_META\type;

class FormInput extends Component
{
    public $type;
    public $name;
    public $label;
    public $placeholder;
    public $required;
    /**
     * Create a new component instance.
     */
    public function __construct($type, $name, $label, $placeholder = '', $required = false)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components..auth.form-input');
    }
}