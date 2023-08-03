<?php

declare(strict_types=1);
/**
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2022-12-30
 */


use P7WebCollector\Type\StringClass;
use P7WebCollector\Type\ArrayClass;
use PHPUnit\Framework\TestCase;
use P7WebCollector\Type\NumericList;

class NumericListTest extends TestCase
{
   private NumericList $list;

  

   public function setUp(): void
   {
        $this->list = new NumericList([1,2,3,5.6,23.5,'4.23', '44', '4F', 0xff, '0xff', 0o777] );
   }
   
    public function testBasix(): void
    {
       
        $this->list->push(new \stdClass());
       
        //var_dump($this->list);
        $this->assertSame($this->list->count(), count($this->list) );
        $this->assertInstanceOf(NumericList::class, $this->list);
        foreach($this->list as $index => $item) {
            $this->assertTrue(is_int($item) || is_float($item));
            $this->assertSame($this->list->get($index), $this->list[$index] );
        }
        
        
    }

    


    public function testIfExceptionIsThrownOnNonList(): void
    {
    
       $this->expectException(\InvalidArgumentException::class);

       $f = new NumericList(
                [1 =>23,
                2, 'foo']
       );
    }
   

}
