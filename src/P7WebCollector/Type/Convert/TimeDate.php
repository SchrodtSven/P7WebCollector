<?php

declare (strict_types = 1);
/**
 * Class for conversion between type types and format of time and string representations
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-07
 */

namespace P7WebCollector\Type\Convert;

class TimeDate
{


    protected static ?TimeDate $singleton = null;
    
    public function dateTime2String(\DateTime $date, string $format = 'Y-m-d H:i:s'): string
    {
        return $date->format($format);
    }

    public function string2DateTime(string  $date): \DateTime
    {
        return (new \DateTime($date));
    }

    public static function getSingleInstance(): self
    {
            if(is_null(static::$singleton)) {
                static::$singleton = new self();
            }

            return static::$singleton;
    }

}