<?php

namespace Jpmerlotti\Z2payMoneyField\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jpmerlotti\Z2payMoneyField\Z2payMoneyField
 */
class Z2payMoneyField extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Jpmerlotti\Z2payMoneyField\Z2payMoneyField::class;
    }
}
