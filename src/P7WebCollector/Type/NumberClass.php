<?php

declare (strict_types = 1);
/**
 * Class representing numbers as generic numeric types (type independent) as instances
 * - offering operations on|with numbers
 *
 * E.g:
 * <code>
 *
 * </code>
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-07
 */
namespace P7WebCollector\Type;

class NumberClass
{
    public function __construct(protected $value = 0)
    {
        $this->sanitizeNumber($value);
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }

    /**
     *
     */
    public function upTo(mixed $max, mixed $step = 1): \Generator
    {
        
        for ($current = $this->value; $current <= $max; $current += $step) {

            yield $current;
        }
    }

    protected function sanitizeNumber(mixed $value): void
    {
        if (!\is_numeric($value)) {
            throw new \InvalidArgumentException($value . ' is NOT numeric but ' . \gettype($value));
        }

        $this->value = ((int) $this->value == $this->value)
        ? (int) $this->value
        : (float) $this->value
        ;
    }

    public function getContent(): mixed
    {
        return $this->value;
    }

}
