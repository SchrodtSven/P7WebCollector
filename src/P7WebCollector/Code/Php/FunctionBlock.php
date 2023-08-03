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
use P7WebCollector\Code\Php;

class FunctionBlock extends CodeBlock
{

    public const ELEMENT_NAME = 'function';
    
    protected bool $isStatic = false;

    protected bool $isClassMethod = true;

    protected string $visibility = PhP::VISIBILITY_PRIVATE; 

    protected function _init(): void
    {
        $this->lines = new ArrayClass();

        $tmp = new ArrayClass();
        switch(true) {
            case $isClassMethod: 
                            $tmp->push($this->visibility);
            case $isStatic: 
                            $tmp->push(Php::IDENTIFIER_STATIC);
            

        }
        $tmp->push(self::ELEMENT_NAME);
        $this->addLine($tmp->join(' '));
    }


    public function render(): StringClass
    {
        
    }

    

    /**
     * Get the value of visibility
     *
     * @return string
     */
    public function getVisibility(): string
    {
        return $this->visibility;
    }

    /**
     * Set the value of visibility
     *
     * @param string $visibility
     *
     * @return self
     */
    public function setVisibility(string $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get the value of isClassMethod
     *
     * @return bool
     */
    public function getIsClassMethod(): bool
    {
        return $this->isClassMethod;
    }

    /**
     * Set the value of isClassMethod
     *
     * @param bool $isClassMethod
     *
     * @return self
     */
    public function setIsClassMethod(bool $isClassMethod): self
    {
        $this->isClassMethod = $isClassMethod;

        return $this;
    }

    /**
     * Get the value of isStatic
     *
     * @return bool
     */
    public function getIsStatic(): bool
    {
        return $this->isStatic;
    }

    /**
     * Set the value of isStatic
     *
     * @param bool $isStatic
     *
     * @return self
     */
    public function setIsStatic(bool $isStatic): self
    {
        $this->isStatic = $isStatic;

        return $this;
    }
}