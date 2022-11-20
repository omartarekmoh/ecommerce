<?php

namespace App\Enums;

use \Spatie\Enum\Enum;

/**
 * @method static self ADMIN()
 * @method static self CUSTOMER()
 */
class UserEnum extends Enum
{
   protected static function values(): array
    {
        return [
            'ADMIN' => 1,
            'CUSTOMER' => 2,
        ];
    }
}
