<?php

declare(strict_types=1);
/**
 * Class generating different sort of random numbers/numbering
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2022-12-30
 */

namespace P7WebCollector\Data\Mock;

use P7WebCollector\Type\ArrayClass;
use P7WebCollector\Type\StringClass;

class Numbers
{
    /**
     * Generating a random legacy (v4) IP address
     * 
     * @return StringClass
     * @FIXME -> get parameterized Ip numbers
     */
    public static function getLegacyIpAddress(): StringClass
    {
        $octets = new ArrayClass(
            [
                rand(0, 255),
                rand(0, 255),
                rand(0, 255),
                rand(0, 255),
            ]
        );
        return new StringClass((string)$octets->join('.'));
    }
}
