<?php

declare(strict_types=1);
/**
 * Class representing strings as instances - wrapping PHP native functions to offer an OO API for 
 * fluent interface chaining
 * 
 * E.g:
 * <code>
 *  echo (new StringClass('FOO'))->toLower()->upperFirst(); // Foo 
 * 
 *  echo (new StringClass('Peter Porker'))->concat(' is Spider-Ham')->toUpper(); // PETER PORKER IS SPIDER-HAM 
 * </code>
 * 
 * @FIXME - always use mb_* functions WHERE applicable!!!!
 * 
 * @TODO - adding DocBlock comments
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2022-12-30
 */
namespace P7WebCollector\Type;

use P7WebCollector\Type\ArrayClass;
use P7WebCollector\Data\Symbol;

 class StringClass implements \Stringable
 {

    protected string $before = '';

    // Class constants defining space modes
    public const SPACE_MODE_NONE = 1;

    public const SPACE_MODE_BEFORE = 2;

    public const SPACE_MODE_AFTER = 4;

    public const SPACE_MODE_BOTH = 8;
    
    /**
     * Constructor function 
     * 
     */
    public function __construct(protected string $content = '')
    {
        $this->before = $this->content;
    }

    /**
     * Concatenating string $addition to current content
     * 
     * @param mixed $addition
     * @return StringClass
     */
    public function concat(\Stringable  $addition): self
    {
        //@FIXME - test if is \Stringable 
        $this->save();
        $this->content .= (string) $addition;
        return $this;
    }

    /**
     * Concatenating elements of iterable $addition to current content
     * 
     * @param \Iterator $addition
     * @return StringClass
     */
    public function concatMultiple(\Iterator $addition): self
    {
        $this->save();
        foreach($addition as $add) {
            $this->concat((string) $add);
        }
        return $this;
    }

    /**
     * Prepending string $begin to current content
     * 
     * @param mixed $begin
     * @param int $spaceMode
     * @return StringClass
     */
    public function prepend(mixed $begin, int $spaceMode = self::SPACE_MODE_NONE): self
    {
        $this->save();
        if ($spaceMode != self::SPACE_MODE_NONE)
            $begin = $this->addSpace($begin);
        $this->content = (string)  $begin . $this->content;
        return $this;
    }


    /**
     * Appending string $end to current content
     * 
     * @param mixed $end
     * @param int $spaceMode
     * @return StringClass
     */
    public function append(mixed $end, int $spaceMode = self::SPACE_MODE_NONE): self
    {
        $this->save();
        if ($spaceMode != self::SPACE_MODE_NONE)
            $end = $this->addSpace($end);
        $this->content = (string) $this->content . $end;
        return $this;
    }

    /**
     * Trimming (often uneeded) white space on string boundaries of current content
     * 
     * @param string $characters
     * @return StringClass
     */
    public function trim(string $characters = " \n\r\t\v\x00"): self
    {
        $this->save();
        $this->content = trim($this->content, $characters);
        return $this;
    }

    /**
     * Adding space before, after or on both boundaries
     * 
     * @param string $text
     * @param int $spaceMode
     * @return string
     */
    public function addSpace(string $text, int $spaceMode = self::SPACE_MODE_BOTH)
    {
        $this->save();
        switch ($spaceMode) {
            case self::SPACE_MODE_BEFORE:
                $text = ' ' . $text;
                break;

            case self::SPACE_MODE_AFTER:
                $text .= ' ';
                break;

            case self::SPACE_MODE_BOTH:
                $text = ' ' . $text . ' ';
        }

        return $text;
    }

    /**
     * Storing current state - to be  used before any modification
     * 
     * @return StringClass
     */
    public function save(): self
    {
        $this->before = $this->content;
        return $this;
    }

    /**
     * Getting currently saved state
     * 
     * @return string
     */
    public function getSaved(): string
    {
        return $this->before;
    }

    /**
     * Reinstate current state before last operation
     * 
     * @return StringClass
     */
    public function rollback(): self
    {
        $this->content = $this->before;
        return $this;
    }

    /**
     * Returning string representation of current content
     * 
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Setting current content
     * 
     * @return string
     */
    public function setContent(mixed $content): self
    {
        $this->save();
        $this->content = (string )$content;
        return $this;
    }



    /**
     * Clone current instance and return it
     * 
     * @return StringClass
     */
    public function clone(): self
    {
        return new self($this->getContent());
    }


    /**
     * Returning current character length 
     * 
     * @return int
     */
    public function length(): int
    {
        return mb_strlen($this->content);
    }

    /**
     * Returning current character width (fullwidth characters count 2) 
     * @return int
     */
    public function width(): int
    {
        return mb_strwidth($this->content);
    }

    /**
     * Splitting current content by given separator into instance of ArrayClass 
     * 
     * @param string $separator
     * @param bool $removeEmptyFirst
     * @param bool $removeEmptyLast
     * @return ArrayClass
     */
    public function splitBy(string  $separator, bool $removeEmptyFirst = false, bool $removeEmptyLast = false): ArrayClass
    {
        $tmp = new ArrayClass(explode($separator, $this->getContent()));
        if ($removeEmptyFirst && empty($tmp->get(0))) {
            $tmp->shift();
        }
        if ($removeEmptyLast && empty($tmp->get(count($tmp) - 1))) {
            $tmp->pop();
        }
        return $tmp;
    }


    /**
     * Splitting current content to sub strings of given length into instance of ArrayClass  
     * 
     * @param int $length
     * @param string|null $encoding
     * @return ArrayClass
     */
    public function split(int $length = 1, ?string $encoding = null): ArrayClass
    {
        return new ArrayClass(mb_str_split($this->content, $length, $encoding));
    }


    /**
     * Enveloping current conetnt with $sign
     * 
     * @param string $sign
     * @return StringClass
     */
    public function quote(string $sign = Symbol::SINGLE_QUOTE_SIGN): self
    {
        $this->save();
        $this->append($sign)->prepend($sign);
        return $this;
    }

    /**
     * Prepending string $start and appending $end to current content
     * 
     * @param string $start
     * @param string $end
     * @return StringClass
     */
    public function embrace(string $start, string $end): self
    {
        $this->save();
        $this->prepend($start)->append($end);
        return $this;
    }

    /**
     * Adding typographic quotation marks to current content
     * 
     * @FIXME -> add other typographic marks
     * @param mixed $mode
     * @return StringClass
     */
    public function quoteTypographic($mode = 'US'): self
    {
        $this->save();
        switch ($mode) {
            case 'US':
            default:
                $start = Symbol::QUOTATION_MARK_US_PRIMARY_LEFT;
                $end = Symbol::QUOTATION_MARK_US_PRIMARY_RIGHT;
                break;
        }
        return $this->embrace($start, $end);
    }
    
    /**
     * Checking if current content equals $needle
     * 
     * @param string $needle
     * @return bool
     */
    public function eq(string $needle): bool
    {
        return ($this->content === $needle);
    }


     /**
     * Checking if current content equals $needle
     * 
     * @param string $needle
     * @return bool
     */
    public function ne(string $needle): bool
    {
        return ($this->content !== $needle);
    }

    /**
     * Checking if current content is contained in given array
     * 
     * @param string $needle
     * @return bool
     */
    public function in(array $data): bool
    {
        return \in_array($this->content, $data);
    }

    /**
     * Checking if current content contains $needle
     * 
     * @param string $needle
     * @return bool
     */
    public function contains(string $needle): bool
    {
        return str_contains($this->content, $needle);
    }

    /**
     * Checking if current content NOT contains $needle
     * 
     * @param string $needle
     * @return bool
     */
    public function notContains(string $needle): bool
    {
        return !str_contains($this->content, $needle);
    }

    /**
     * Checking if current content starts with $needle
     * 
     * @param string $needle
     * @return bool
     */
    public function starts(string $needle): bool
    {
        return str_starts_with($this->content, $needle);
    }

    /**
     * Checking if current content NOT starts with $needle
     * 
     * @param string $needle
     * @return bool
     */
    public function notStarts(string $needle): bool
    {
        return !str_starts_with($this->content, $needle);
    }

    /**
     * Checking if current content ends with $needle
     * 
     * @param string $needle
     * @return bool
     */
    public function ends(string $needle): bool
    {
        return str_ends_with($this->content, $needle);
    }

    /**
     * Checking if current content NOT ends with $needle
     * 
     * @param string $needle
     * @return bool
     */
    public function notEnds(string $needle): bool
    {
        return !str_ends_with($this->content, $needle);
    }


    /**
     * Returning position of sub string $needle in current content, or false
     * starting at $offset
     * 
     * @param string $needle
     * @param int $offset 
     * @return int|false
     */
    public function position(string $needle, int $offset = 0, bool $caseSensitive = true): int|false
    {
        return ($caseSensitive)
            ? mb_strpos($this->content, $needle, $offset)
            : mb_stripos($this->content, $needle, $offset);
    }

    /**
     * Returning sub string from position $offset and $length wide
     * 
     * @param string $needle
     * @param int $offset 
     * @return int|false
     */
    public function subString(int $offset, ?int $length = null, ?string $encoding = null): self
    {
        return new self(mb_substr($this->content, $offset, $length, $encoding));
    }

    // 
    
    /**
     * Cutting substring from current content - operates on *bytes* NOT characters 
     * 
     * @see https://www.php.net/manual/de/function.mb-strcut.php
     */
    public function cut(int $start, ?int $length = null, ?string $encoding = null): self
    {
        return new self(mb_strcut($this->content, $start, $length, $encoding));
    }

    
    /**
     * Replacing all ocurrences of string $search with $replace within current content 
     * 
     * Hint: *str_replace* _itself_ is /utf-8 ready/, thats why *mb_str_replace* does NOT exist.
     *  
     * @param string $search
     * @param string $replace
     * @return StringClass
     */
    public function replace(string $search, string $replace): self
    {
        $this->save();
        $this->content = str_replace($search, $replace, $this->content);
        return $this;
    }

    /**
     * Replacing all ocurrences of elemnts in array $search with corresponding in array $replace within current content 
     * 
     * @param array $search
     * @param array $replace
     * @return StringClass
     */
    public function replaceMultiple(array $search, array $replace): self
    {
        $this->save();
        $this->content = str_replace($search, $replace, $this->content);
        return $this;
    }

    /**
     * Convert current content to lower case 
     * 
     * @return StringClass
     */
    public function toLower(): self
    {
        $this->save();
        $this->content = mb_strtolower($this->content);
        return $this;
    }

    /**
     * Convert current content to upper case 
     * 
     * @return StringClass
     */
    public function toUpper(): self
    {
        $this->save();
        $this->content = mb_strtoupper($this->content);
        return $this;
    }

    /**
     * Convert current content to lower case first
     * @return StringClass
     */
    public function lowerFirst(): self
    {
        $this->save();
        $this->content = lcfirst($this->content);
        return $this;
    }

    /**
     * Convert current content to upper case first 
     * 
     * @return StringClass
     */
    public function upperFirst(): self
    {
        $this->save();
        $this->content = ucfirst($this->content);
        return $this;
    }
    /**
     * Convert each word in current content to upper case first 
     *  
     * @return StringClass
     */
    public function upperWords(): self
    {
        $this->save();
        $this->content = ucwords($this->content);
        return $this;
    }

    /**
     * Wrapping current content with $break after max. $width at word boundary
     * 
     * @param int $width
     * @param string $break
     * @return StringClass
     */
    public function wrapWords(int $width = 80, string $break = PHP_EOL): self
    {
        $this->save();
        $this->content = wordwrap($this->content, $width, $break);
        return $this;
    }

    /**
     * Generic padding function 
     * 
     * @param int $length
     * @param string $padString
     * @param mixed $padType
     * @return StringClass
     */
    public function pad(int $length, string $padString= ' ', $padType = \STR_PAD_RIGHT): self
    {
        $this->save();
        $this->content = str_pad($this->content, $length, $padString, $padType);
        return $this;
    }

    /**
     * Padding current content at both boundaries
     * 
     * @param int $length
     * @param string $padString
     * @return StringClass
     */
    public function padBoth(int $length, string $padString= ' '): self
    {
        $this->save();
        return  $this->pad($length, $padString, \STR_PAD_BOTH);
    }

    /**
     * Padding current content at left boundary
     * 
     * @param int $length
     * @param string $padString
     * @return StringClass
     */
    public function padLeft(int $length, string $padString= ' '): self
    {
        $this->save();
        return $this->pad($length, $padString,  \STR_PAD_LEFT);
    }

    /**
     * Padding current content at right boundary
     * 
     * @param int $length
     * @param string $padString
     * @return StringClass
     */
    public function padRight(int $length, string $padString= ' '): self
    {
        $this->save();
        return $this->pad($length, $padString, \STR_PAD_RIGHT);
    }

    /**
     * Repeating current string $times times
     * 
     * @param int times
     * @return self
     */
    public function repeat(int $times): self
    {
        return new self(\str_repeat($this->content, $times));
    }

    /**
     * Interceptor function to be invoked, if instance is used in string context (e.g: echo, (string) etc.)
     * 
     * @return string
     */
    public function __toString(): string
    {
        return $this->content;
    }

    /**
     * Rotate current content by 13 within [azAZ]
     */
    public function rot13(): self
    {
        $this->save();
        $this->content = str_rot13($this->content);
        return $this;
    }

    // functions operating on StringClass with Stringclass(es) as parameters

    public function equals(StringClass $text): bool
    {
       return $this->content === $text->getContent();
    }

    public function notEquals(StringClass $text): bool
    {
        return $this->content !== $text->getContent();
    }

    // @TODO Check if needed, because self::concat is supporting \Stringable already
    public function plus(StringClass $addition): self
    {
        $this->save();
        $this->concat($addition->getContent());
        return $this;
    }

    public function getUtfElephant(bool $opts = false)
    {
        return new self(chr(240) . chr(159) . chr(144) . chr(152));
    }
 }
