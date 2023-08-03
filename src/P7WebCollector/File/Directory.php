<?php

declare(strict_types=1);
/**
 * Class helping doing stuff with directories
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-28
 */

namespace P7WebCollector\File;

use P7WebCollector\Type\StringClass;
use P7WebCollector\Type\ArrayClass;
use P7WebCollector\Code\Php\Variable;


class Directory
{
    public function getRecursiveIterator(string $path = '.')
    {
        $directory = new \RecursiveDirectoryIterator($path);
        return new \RecursiveIteratorIterator($directory);
    }

    public function  filterbyClosure(\callable $function): mixed
    {
        return $function($this);
    }

    public function filterByFilter(Filter $filter)
    {

    }

    
}