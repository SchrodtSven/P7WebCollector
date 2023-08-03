<?php

declare(strict_types=1);
/**
 * Trait holding commomly used array functionality implementing:
 * 
 *  - \ArrayAccess, 
 *  - \Iterator, 
 *  - \Countable
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-04-07
 */

namespace P7Webcollector\Intl\Dry;

trait ArrayTrait
{

    // Implementing the \Countable interface
    public function count(): int
    {
        return count($this->content);
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

    // The following functions implement interface \ArrayAccess
    //  to provide accessing objects as arrays


    public function offsetGet($offset): mixed
    {
        return $this->content[$offset] ?? null;
    }

    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->content[] = $value;
        } else {
            $this->content[$offset] = $value;
        }
    }

    public function offsetExists($offset): bool
    {
        return isset($this->content[$offset]);
    }

    public function offsetUnset($offset): void
    {
        unset($this->content[$offset]);
    }
}