<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert2 extends Component
{
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'primary':
                $class = 'alert-primary';
                break;
            case 'secondary':
                $class = 'alert-secondary';
                break;
            case 'danger':
                $class = 'alert-danger';
                break;
            case 'warning':
                $class = 'alert-warning';
                break;
            case 'info':
                $class = 'alert-info';
                break;
            case 'light':
                $class = 'alert-light';
                break;
            case 'dark':
                $class = 'alert-dark';
                break;
            default:
                $class = 'alert-info';
                break;
        }

        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
