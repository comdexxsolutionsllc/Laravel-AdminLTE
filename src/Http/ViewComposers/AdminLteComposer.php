<?php

namespace LaravelAdminLTE\Http\ViewComposers;

use Illuminate\View\View;
use LaravelAdminLTE\AdminLte;

class AdminLteComposer
{
    /**
     * @var AdminLte
     */
    private $adminlte;

    public function __construct(
        AdminLte $adminlte
    ) {
        $this->adminlte = $adminlte;
    }

    public function compose(View $view)
    {
        $view->with('adminlte', $this->adminlte);
    }
}
