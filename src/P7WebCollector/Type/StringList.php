<?php

declare(strict_types=1);
/**
 * Class representing a list of string values
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2022-12-30
 */
namespace P7WebCollector\Type; 

use P7WebCollector\Type\StringClass;
use P7WebCollector\Type\Operational\ArrayFilter;
use P7WebCollector\Intl\Dry\ArrayTrait;

class StringList implements \ArrayAccess, \Iterator, \Countable
{
    use ArrayTrait;

    public function __construct(private array $content = [])
    {
        if(!\array_is_list($content)) {
            throw new \InvalidArgumentException('not a list!!!');
        }
        /* parent::__construct($content);

        $this->walk(function(&$item) {
            $item = $this->sanitizeElement($item);
        });
        */
        
    }

    public function push(string | \Stringable $value): self
    {
        
    }
}