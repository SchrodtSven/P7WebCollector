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

class DocBlock extends CodeBlock
{
    private string $blockTpl;

    private string $lineTpl;



    
    public function __construct()
    {
        $this->_init();
    }

    protected function _init(): void
    {
        $this->lines = new ArrayClass();
        $this->lines->push(
            new StringClass('/**')
        );
    }

    public function addLine(string $content, string $tag = '', bool $finish = false): self
    {
        if($finish) {
            $line =  ' */'; 
        } else {
            $line = ' * ';
             if ($tag !== '') {
                 $line.= '@' . $tag . ' ';
             }
            $line.= $content;
        }
        
        
        $this->lines->push(new StringClass($line));
        return $this;
    }

   
 

    public function param(string $name, string $type): self
    {
        $this->addLine('', join(
            ' ',
            ['param',$type, $name]))
        ;
        return $this;
    }

    public function render(): StringClass
    {
        $this->addLine('/', ' ', true);
       return  parent::render();
    }


}