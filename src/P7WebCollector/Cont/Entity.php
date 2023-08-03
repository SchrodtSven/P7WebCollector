<?php

declare (strict_types = 1);
/**
 * Class for basic entity representation
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-18
 */

namespace P7WebCollector\Cont;
use P7WebCollector\Type\Convert\TimeDate;

class Entity
{
    protected TimeDate $dateTimeConvert;

    protected int $id = 0;

    protected \DateTime $created;

    protected \DateTime $modified;
    
    public function __construct()
    {
       $this->dateTimeConvert =  TimeDate::getSingleInstance();
    }

    public function __set(string $name, mixed $value) 
    {
        switch($name) {
                case 'created':
                case 'modified':

                    $value = $this->dateTimeConvert->string2DateTime($value);
                  break; 
                   
                case 'id':
                    $value = (int) $value;
                    break;

                default: 
                    $value = (string) $value;
     }

     $this->$name = $value;

    }


    


    /**
     * Get the value of created
     *
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    /**
     * Get the value of modified
     *
     * @return \DateTime
     */
    public function getModified(): \DateTime
    {
        return $this->modified;
    }
}