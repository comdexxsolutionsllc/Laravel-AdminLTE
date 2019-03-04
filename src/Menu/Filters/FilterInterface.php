<?php

namespace LaravelAdminLTE\Menu\Filters;

use LaravelAdminLTE\Menu\Builder;

interface FilterInterface
{
    public function transform($item, Builder $builder);
}
