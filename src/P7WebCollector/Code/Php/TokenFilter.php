<?php

declare(strict_types=1);
/**
 * Class for filtering (lists of) instances of \PhpToken
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-04-05
 */

namespace P7WebCollector\Code\Php;
use P7WebCollector\Code\Php; 
use P7WebCollector\Type\StringClass;
use P7WebCollector\Type\ArrayClass;
use P7WebCollector\Type\Operational\StringFilter;
use P7WebCollector\Type\Operational\ArrayFilter;


class TokenFilter
{

    public function __construct(private ArrayFilter $filter)
    {

    }

   
    
    public function byTypeList(array $list) : ArrayClass
    {
        // 
        $this->filter->byCallable(
            function($item) use($list): bool {
                $tf = new \P7WebCollector\Code\Php\TokenManager();
                if($tf->isInList($item, $list)) {
                    return false;
                } else return true;
             } 
        );
        return $this->filter->getFiltered();
    }

}