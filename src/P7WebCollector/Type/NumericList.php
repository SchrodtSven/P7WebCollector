<?php

declare(strict_types=1);
/**
 * Class representing a list of numeric values
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

class NumericList extends ArrayClass
{
    private mixed $defaultOnNotSanitizable = 0;

    public function __construct(array $content = [])
    {
        if(!\array_is_list($content)) {
            throw new \InvalidArgumentException('not a list!!!');
        }
        parent::__construct($content);

        $this->walk(function(&$item) {
            $item = $this->sanitizeElement($item);
        });
        
    }

    public function push(mixed $value): self
    {
        array_push($this->content, $this->sanitizeElement($value));
        return $this;
    }

    public function unset(int $index): self
    {
        if (array_key_exists($index, $this->content)) {
            unset($this->content[$index]);
            //renumbering indices to fix prereq for bein a list:
            $this->content = \array_values($this->content);
        }
        return $this;
    }


    // Calculating functions:: 
    
    public function sum(): int | float
    {
        return array_sum($this->content);
    }


    // Operating on several elements of array

    public function slice(int $offset, ?int $length= null): self
    {
        $tmp = \array_slice($this->content, $offset, $length);
        return new self($tmp);
    }

    public function sliceAndCut(): self
    {
        // unsetting from offset, length incl. renumbering and returning array of unset elements
    }

    public function cut(): self
    {
        // unsetting from offset, length incl. renumbering
    }

    public function getIntOrFloat(mixed $value): int | float
    {
        return match(true) {
            (!\is_scalar($value)) => $this->defaultOnNotSanitizable,

            (\is_numeric($value)) => $this->parseNumeric($value),
            default => intval($value)
        };
    }

    public function sanitizeElement(mixed $value): int | float
    {
        return match(gettype($value)) {
            'integer', 'double', 'float' => $value,
            default => $this->getIntOrFloat($value)
        };
    }

    private function parseNumeric(mixed $value) : int | float
    {
        $intV = \intval($value);
        $floatV = \floatval($value);

        return ($intV == $floatV) ? $intV : $floatV;
    }

    

    /**
     * Get the value of defaultOnNotSanitizable
     *
     * @return mixed
     */
    public function getDefaultOnNotSanitizable(): mixed
    {
        return $this->defaultOnNotSanitizable;
    }

    /**
     * Set the value of defaultOnNotSanitizable
     *
     * @param mixed $defaultOnNotSanitizable
     *
     * @return self
     */
    public function setDefaultOnNotSanitizable(mixed $defaultOnNotSanitizable): self
    {
        $this->defaultOnNotSanitizable = $defaultOnNotSanitizable;

        return $this;
    }
}