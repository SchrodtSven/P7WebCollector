<?php

declare (strict_types = 1);
/**
 * Class representing instances of int(eger) data values
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-04-07
 */

namespace P7WebCollector\Type\Scalar;

class StringClass
{
    public function __construct(protected string $content)
    {

    } 

    public static function createFromNonString(mixed $content): self
    {
        $instance = new self();
        return $instance->importFromNonString($content);
        
    }

    public function importFromNonString(mixed $content): self
    {
        $this->content = $this->stringify($content);
        
    }

    public function is_stringable(mixed $var): bool
    {
        return (
            $var instanceof \Stringable
            || is_string($var)
            || is_numeric($var)
        );
    }

    public function stringify(mixed $value): ?string
    {
        return match(true) {
            is_stringable($value) => (string) $value,
            is_bool($value) => ($value === true) ? 'true' : 'false',
        default=> 'null'
        };

    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }
}
