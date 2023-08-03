<?php

declare (strict_types = 1);
/**
 * Global functions
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-30
 */

function is_stringable(mixed $var): bool
{
    return (
        $var instanceof \Stringable
        || is_string($var)
        || is_numeric($var)
    );  
}

function stringify(mixed $value): ?string
{
    return match(true) {
        is_stringable($value) => (string) $value,
        is_bool($value) =>  ($value === true) ? 'true' : 'false',
        default => 'null' 
    };
        


}


