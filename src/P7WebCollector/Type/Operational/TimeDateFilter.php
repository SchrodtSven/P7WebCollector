<?php

declare(strict_types=1);
/**
 * Class for filtering directory entries
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-30
 */

namespace P7WebCollector\Type\Operational;


class TimeDateFilter
{
    /**
     * Converting given date value to \DateTime, if possible
     * 
     * @param mixed $datTime
     * @return \DateTime
     */
    public function sanitizeDateTime(mixed $dateTime): \DateTime
    {
        switch(true) {
            case $dateTime instanceof \DateTime: 
                return $dateTime;
                break;

            case is_int($dateTime):
                return (new \DateTime)->setTimestamp($dateTime);
                break;

        }
     }

     public function between(\DateTime $a, \DateTime $b): bool
    {
        
    }
}