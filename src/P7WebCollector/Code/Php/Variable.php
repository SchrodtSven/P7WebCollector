<?php

declare(strict_types=1);
/**
 * Class representing a php variable 
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-27
 */

namespace P7WebCollector\Code\Php;
use P7WebCollector\Code\Php; 
use P7WebCollector\Type\StringClass;
use P7WebCollector\Type\ArrayClass;

class Variable
{

    private const DEFAULT_VISIBILITY = 'private';

    private StringClass $name;

    private StringClass $type;

    private bool $nullable = false;

    private StringClass $visibility;

    private mixed $content;

    public function __construct(
        string $name, 
        mixed $content = '',
        bool $autoDetectType = true)
    {
        $this->name = new StringClass($name);
       
        
        $this->content = $content;
        if($autoDetectType) {
            $this->type = new StringClass(\gettype($content));
        }

        $this->sanitizeProperties();
    }


    public function sanitizeProperties()
    {
        if(!$this->name->starts('$')) {
            $this->name->prepend('$');
        }   
        
        if(!isset($this->visibility)) {
            $this->visibility = (new StringClass(self::DEFAULT_VISIBILITY));
        }
        
        if((string) $this->type === 'object') {
            $this->type->setContent($this->content::class);
        }
    }

    /**
     * 
     */
    public function getDeclaration(bool $classNameOnly = false): StringClass
    {
            $type = ($classNameOnly && $this->type->contains('\\')) 
                 ? (new Php)->getClassFromFullyQualifiedName($this->type)
                 : $this->type;
            


                 
            $tmp = new ArrayClass();
            $tmp->push((string) $this->visibility);
            if($this->nullable) {
                $type->prepend('?');
            }
            
            $tmp->push((string) $type);
            $tmp->push((string) $this->name);
            $tmp->push(PHP_EOL);
            
           

            return $tmp->join(' ');

    }

    /**
     * Get the value of nullable
     *
     * @return bool
     */
    public function getNullable(): bool
    {
        return $this->nullable;
    }

    /**
     * Set the value of nullable
     *
     * @param bool $nullable
     *
     * @return self
     */
    public function setNullable(bool $nullable = true): self
    {
        $this->nullable = $nullable;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return StringClass
     */
    public function getName(): StringClass
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param StringClass $name
     *
     * @return self
     */
    public function setName(StringClass $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of type
     *
     * @return StringClass
     */
    public function getType(): StringClass
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param StringClass $type
     *
     * @return self
     */
    public function setType(StringClass $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of visibility
     *
     * @return StringClass
     */
    public function getVisibility(): StringClass
    {
        return $this->visibility;
    }

    /**
     * Set the value of visibility
     *
     * @param StringClass $visibility
     *
     * @return self
     */
    public function setVisibility(StringClass $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get the value of content
     *
     * @return mixed
     */
    public function getContent(): mixed
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @param mixed $content
     *
     * @return self
     */
    public function setContent(mixed $content): self
    {
        $this->content = $content;

        return $this;
    }
}