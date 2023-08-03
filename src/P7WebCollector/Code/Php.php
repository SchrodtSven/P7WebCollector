<?php

declare(strict_types=1);
/**
 * Class generating source code partials for the PHP Hypertext Preprocessor language up to v. 8.2.*
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-27
 */

namespace P7WebCollector\Code;

use P7WebCollector\Type\StringClass;
use P7WebCollector\Type\ArrayClass;
use P7WebCollector\Code\Php\Variable;

class Php extends Generic
{

    /**
     * Constants for PHP native types
     * 
     * @see https://www.php.net/manual/en/function.gettype.php 
     * */ 
    public const PHP_TYPE_BOOLEAN = 'boolean';
    public const PHP_TYPE_INTEGER = 'integer';
    public const PHP_TYPE_DOUBLE = 'double';  //(for historical reasons "double" is returned in case of a float, and not simply "float")
    public const PHP_TYPE_STRING = 'string';
    public const PHP_TYPE_ARRAY = 'array';
    public const PHP_TYPE_OBJECT = 'object';
    public const PHP_TYPE_RESOURCE = 'resource';
    public const PHP_TYPE_RESOURCE_CLOSED = 'resource (closed)';
    public const PHP_TYPE_NULL = 'NULL';

    
    public const VISIBILITY_PRIVATE = 'private';
    public const VISIBILITY_PROTECTED = 'protected';
    public const VISIBILITY_PUBLIC = 'public';

    public const IDENTIFIER_STATIC = 'static';
    
    /**
     * Extracting class name from fully qualified name - e.g:
     * 
     * P7WebCollector\Type\StringClass --> StringClass
     * 
     */
    public function getClassFromFullyQualifiedName(StringClass $fqn): StringClass
    {
        return new StringClass($fqn->splitBy('\\')->pop()); 
    }

    /**
     * Matching return value of \getttype() to type for declaration
     * 
     * @param string $type)
     */
    public function matchGettype(string $type): StringClass
    {
        $typeMatched =  match($type) {
            self::PHP_TYPE_DOUBLE => 'float',
            self::PHP_TYPE_BOOLEAN => 'bool',
            self::PHP_TYPE_INTEGER => 'int',
            default => $type
        };

        return new StringClass($typeMatched);
    }

    /**
     * Matching type of given value for declaration
     * 
     * @param mixed $content
     */
    public function matchTypeByExample(mixed $content): StringClass
    {
        $nativeType = \gettype($content);

        if($nativeType === 'object') {
            return new StringClass($content::class);
        } 

        return $this->matchGettype($nativeType);
    }


    public function handleValueForAssignment(mixed $value): StringClass
    {
        //var_dump(\is_scalar($value));
        //\var_dump($value);die;
            if(\is_scalar($value) || \is_null($value)) {
                return $this->handleScalarValueForAssignment($value);
            } else {
                return new StringClass('Implement for *non scalars*');
            }
    }

    /**
     * Handle given $value in context of creating assignments
     * 
     * @param mixed $value
     * @return StringClass
     */
    public function handleScalarValueForAssignment(mixed $value): StringClass
    {
        switch (gettype($value)) {

            case self::PHP_TYPE_BOOLEAN:
                $boolString = ($value === true) ? 'true' : 'false';
                return new StringClass($boolString);
                break;

            case self::PHP_TYPE_INTEGER:
            case self::PHP_TYPE_DOUBLE: 
                return new StringClass((string) $value);
                break;

            case self::PHP_TYPE_STRING:
               return  (new StringClass($value))->quote($this->stringDelimiter);
            
            case self::PHP_TYPE_NULL:
                return  (new StringClass('null'));
            
        }
    }

    /**
     * (PHP) generic function for assigments - e.G:
     * 
     * $a = 5; // Simple assigment 
     * proteced static Foo $member = new \Bar\Baz(23.542666); // Declaration & assigment
     */
    public function getAssignment(StringClass $left, mixed $right): StringClass
    {
        $value = $this->handleValueForAssignment($right);
        
        return (new StringClass(sprintf('%s = %s',(string) $left, (string) $value)))->append(';');
    }

    /**
     * (PHP) generic function for declarations 
     * 
     * @param Variable $variable
     * @return StringClass
     */
    public function getDeclaration(Variable $variable): StringClass
    {
        return $variable->getDeclaration();
    }


    /**
     * (PHP) generic function for variable assignments
     * 
     * @param Variable $variable
     * @return StringClass
     */
    public function getVariableAssignment(Variable $variable): StringClass
    {
        return $this->getAssignment($variable->getName(), $variable->getContent());
    }



    /**
     * Get the value of stringDelimiter
     *
     * @return string
     */
    public function getStringDelimiter(): string
    {
        return $this->stringDelimiter;
    }

    /**
     * Set the value of stringDelimiter
     *
     * @param string $stringDelimiter
     *
     * @return self
     */
    public function setStringDelimiter(string $stringDelimiter): self
    {
        $this->stringDelimiter = $stringDelimiter;

        return $this;
    }

}