<?php

declare(strict_types=1);
/**
 * Class generating generic (language independant) source code partials
 *
 * 
 *  --> @TODO -> make Generic abstarct and implement handleScalarValueForAssignment etc. in sub classes!!!
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-01-02
 */

namespace P7WebCollector\Code;

use P7WebCollector\Type\StringClass;

class Generic
{

    /**
     * Constants for types
     * 
     * 
     * */ 
    public const TYPE_BOOLEAN = 'boolean';
    public const TYPE_INTEGER = 'integer';
    public const TYPE_DOUBLE = 'double'; 
    public const TYPE_FLOAT = 'float'; 
    public const TYPE_STRING = 'string';
    public const TYPE_ARRAY = 'array';
    public const TYPE_OBJECT = 'object';
    public const TYPE_NULL = 'NULL';

    public string $stringDelimiter = "'";

    /**
     * @FIXME - use generic context handling methods here
     * @deprecated
     */
    public function getAssignmentBoo(string $variable, mixed $value): StringClass
    {
        if (!is_numeric($value)) {
            $value = (new StringClass($value))->quote();
        }
        return new StringClass(sprintf('%s = %s', $variable, (string) $value));
    }

    
}
