<?php

declare(strict_types=1);
/**
 * Class representing arrays as instances - wrapping PHP native functions to offer an OO API for fluent interface chaining
 * implementing interfaces that allow using instances like arrays (iterting with foreach, accessing elements via [])
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

class ArrayClass implements \Countable, \Iterator, \ArrayAccess
{

    protected array $before = [];

    public function __construct(protected array $content = [])
    {
        $this->before = $this->content; 
    }

    public function join(string $glue): StringClass
    {
        return new StringClass(implode($glue, $this->content));
    }

    public function clone(): self
    {
        return new self($this->getContent());
    }

    public function get(int $index): mixed
    {
        return $this->content[$index] ?? null;
    }

    public function set(int $index, mixed $value): self
    {
        $this->content[$index] ?? null;
        return $this;
    }

    public function getByKey(string $key): mixed
    {
        return $this->content[$key] ?? null;
    }

    public function setByKey(string $key, mixed $value): self
    {
        $this->content[$key] ?? null;
        return $this;
    }

    public function keyExists(string $key): bool
    {
        return array_key_exists($key, $this->content);
    }

    public function indexExists(int $index): bool
    {
        return isset($this->content[$index]);
    }

    public function unset(int $index): self
    {
        if (array_key_exists($index, $this->content)) {
            unset($this->content[$index]);
        }
        return $this;
    }

    public function getKeys(): self
    {
        return new ArrayClass(array_keys($this->content));
    }


    public function save(): self
    {
        $this->before = $this->content;
        return $this;
    }

    public function getSaved(): array
    {
        return $this->before;
    }

    public function rollback(): self
    {
        $this->content = $this->before;
        return $this;
    }

    public function getContent(): array
    {
        return $this->content;
    }

    public function count(): int
    {
        return count($this->content);
    }

    public function empty(): bool
    {
        return (count($this->content) === 0) ? true : false;
    }

    public function push(mixed $value): self
    {
        array_push($this->content, $value);
        return $this;
    }


    public function pop(): mixed
    {
        return array_pop($this->content);
    }

    public function shift(): mixed
    {
        return array_shift($this->content);
    }

    public function unshift(mixed $value): self
    {
        array_unshift($this->content, $value);
        return $this;
    }


    /**
     * @TODO adding diferent sorting modes
     */
    public function sort(bool $ignoreCase = true): self
    {
        if ($ignoreCase) {
            natcasesort($this->content);
        } else {
            natsort($this->content);
        }
        return $this;
    }

    public function removeDuplicates(int $mode = \SORT_REGULAR): self
    {
        $this->content = array_unique($this->content, $mode);
        return $this;
    }

    public function walk(callable $callback)
    {
        $tmp = $this->getContent();
        array_walk($tmp, $callback);
        $this->content = $tmp;
    }
    public function prependAll(string $content)
    {
        $this->walk(
            fn($item) => $item->prepend($content)
        );
    }
     
    public function getFilter(): ArrayFilter
    {
        return new ArrayFilter($this);
    }
     

    public function __isset(mixed $index): bool
    {
    
        return isset($this->content[$index]);
    }

    public function  getRandomElement(): mixed
    {
        return $this->content[array_rand($this->content)];
    }

    // The following functions implement interface \Iterator making it possible
    // to iterate container objects with foreach

    /**
     * Resetting pointer to first array element
     */
    public function rewind(): void
    {
        reset($this->content);
    }

    /**
     * Getting current element
     *
     */
    public function current(): mixed
    {
        return current($this->content);
    }

    /**
     * Getting key of current element
     * 
     * @return mixed
     */
    public function key(): mixed
    {
        return key($this->content);
    }

    /**
     * Forward internal array pointer
     * 
     * @return mixed|void
     */
    public function next(): void
    {
        next($this->content);
    }

    /**
     * Returning if current element is valid
     *
     * @return bool
     */
    public function valid(): bool
    {
        return ($this->current() !== false);
    }

Ø

    public function filter(): ArrayFilter
    {
        return new ArrayFilter($this);
    }
}