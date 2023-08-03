<?php

declare(strict_types=1);
/**
 * Class generating DocBlock comments
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-04-06
 */

namespace P7WebCollector\Code\Php;
use P7WebCollector\Type\StringClass;
use P7WebCollector\Type\ArrayClass;

class CodeBlock
{
    protected int $indentLevel = 0;

    protected ArrayClass $lines;
    
    public function __construct()
    {
        $this->_init();
    }

    protected function _init(): void
    {
        $this->lines = new ArrayClass();
    }

    /**
     * Get the value of indentLevel
     *
     * @return int
     */
    public function getIndentLevel(): int
    {
        return $this->indentLevel;
    }

    /**
     * Set the value of indentLevel
     *
     * @param int $indentLevel
     *
     * @return self
     */
    public function setIndentLevel(int $indentLevel): self
    {
        $this->indentLevel = $indentLevel;

        return $this;
    }

    public function addLine(string $content, string $attribute = '', bool $finish = false): self
    {
        
        $this->lines->push(new StringClass($content));
        return $this;
    }

    public function addBlock(CodeBlock $content): self
    {
        
        $this->lines->push($content);
        return $this;
    }


    public function render(): StringClass
    {
        
        if($this->indentLevel > 0) { 
            $repeat = 4 * $this->indentLevel;
            $this->lines->prependAll(\str_repeat(' ', $repeat));
        }
        return $this->lines->join(PHP_EOL);
    }

    public function __toString(): string
    {
        return (string) $this->render();
    }
    
}