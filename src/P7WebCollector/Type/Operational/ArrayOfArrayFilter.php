<?php

declare(strict_types=1);
/**
 * Class for applying (commonly) generic filter operations on instances of ArrayClass holding ArrayClass instances
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-10-01
 */
namespace P7WebCollector\Type\Operational;
use P7WebCollector\Type\StringClass;
use P7WebCollector\Type\ArrayClass;
use P7WebCollector\Type\Operational\StringFilter;

class ArrayOfArrayFilter extends ArrayFilter
{
 
    public const VALID_TEXT_FILTERS = [
                        'contains',
                        'notContains',
                        'starts',
                        'notStarts',
                        'ends',
                        'notEnds',
                        'eq',
                        'ne',
                        'in',
                        'ni'

    ];

    public function textFilterGeneric(string|int $index, string $needle, string $filterName = 'contains', bool $getAsFilter = false): ArrayFilter | ArrayClass
    {

        if(!(new StringClass($filterName))->in(self::VALID_TEXT_FILTERS)) {
            throw new \InvalidArgumentException(\sprintf('Filter name %s is not valid', $filterName));
        }
        $filter =  $this->byCallable(function(array $data) use($index, $needle, $filterName ) {
            return (new StringClass($data[$index]))->$filterName($needle);
        });
        
        return ($getAsFilter) ? $filter : $filter->getFiltered();
    }



    public function textFilterContains(string|int $index, string $needle): ArrayFilter 
    {

        return $this->byCallable(function(array $data) use($index, $needle ) {
            return (new StringClass($data[$index]))->contains($needle);
        });
        
    }

    
   
}