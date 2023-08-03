<?php

declare(strict_types=1);
/**
 * Class for applying filter  operations on instances of StringClass and defining commonly used patterns
 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P3tite
 * @package P3tite
 * @version 0.1
 * @since 2023-01-01
 */

namespace P7WebCollector\Type\Operational;
use P7WebCollector\Type\StringClass;
use P7WebCollector\Type\ArrayClass;


class StringFilter
{
    public const WHITESPACE_ONLY = '/\A\s*\z/';

    public const TEXT_FILTER_STARTS = 1;

    public const TEXT_FILTER_ENDS = 2;

    public const TEXT_FILTER_CONTAINS = 4;

    public const TEXT_FILTER_MATCHES_REGEX = 8;

     

    public function __construct(mixed $content)
    {
        
    }
}