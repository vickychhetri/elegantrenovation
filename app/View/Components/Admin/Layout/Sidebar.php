<?php

namespace App\View\Components\Admin\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public $user;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->user = Session::get('user');

        return view('components.admin.layout.sidebar');
    }
}
