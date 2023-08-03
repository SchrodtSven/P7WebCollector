<?php

declare(strict_types=1);
/**
 * Class generating source code partials from given 
 *  - variable names
 *  - type $names
 *  - transforming (textual) values 
 *  - etc.
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-27
 */

namespace P7WebCollector\Code\Php;

use P7WebCollector\Type\StringClass;
use P7WebCollector\Type\ArrayClass;
use P7WebCollector\Code\Php;

class NameTransformer
{
    /**
     * Getting constant name from given name
     */
    public function constantFromString(string | \Stringable $name, string $prefix = '', 
         string $suffix = ''): StringClass
    {
        switch(true) {
          case (! $name instanceof StringClass): 
            $name = new StringClass($name);
          case $prefix !== '' :
            $name->prepend($prefix); 
          case $suffix !== '' :
                $name->append($suffix); 
        }
        
        return $name->replaceMultiple(
            [' ', ':', ',', '.'],
            ['_'] )->toUpper();
    }
}