<?php

namespace Mabeyrou\QrCode\Facades;

use Illuminate\Support\Facades\Facade;
use Mabeyrou\QrCode\Generator;

class QrCode extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        self::clearResolvedInstance(Generator::class);

        return Generator::class;
    }
}
