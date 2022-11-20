<?php

namespace App\Enums;

use \Spatie\Enum\Enum;

/**
 * @method static self FIXED()
 * @method static self PERCENTAGE()
 */
class CouponEnum extends Enum
{
   protected static function values(): array
    {
        return [
            'FIXED' => 0,
            'PERCENTAGE' => 1,
        ];
    }
}
