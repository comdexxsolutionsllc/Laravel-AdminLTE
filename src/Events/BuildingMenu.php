<?php

namespace LaravelAdminLTE\Events;

use LaravelAdminLTE\Menu\Builder;

class BuildingMenu
{
    public $menu;

    public function __construct(Builder $menu)
    {
        $this->menu = $menu;
    }
}
