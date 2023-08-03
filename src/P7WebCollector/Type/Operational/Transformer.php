<?php

declare(strict_types=1);
/**
 * Foundation class transforming between different data structures | types
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-01-01
 */

namespace P7WebCollector\Type\Operational;
use P7WebCollector\Type\StringClass;
use P7WebCollector\Type\ArrayClass;

class Transformer
{

    public const LIST_SEPARATOR = "', '"; 

    public function mixedToString(mixed $input): string
    {
        //@FIXME detecting all types, adding \P3tite\Type\

        switch(true) {
            case $input instanceof ArrayClass:
                return (string) $input->join(self::LIST_SEPARATOR);
                break;

                default:
                return (string) $input;
        }
    }
}