<?php

namespace BrunoCouty\FinancialManager;

use Illuminate\Support\Facades\Facade;

class FinancialManagerFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'brunocouty-financial-manager';
    }
}