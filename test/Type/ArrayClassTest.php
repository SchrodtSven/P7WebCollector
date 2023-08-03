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
use P7WebCollector\Data\Mock\Words;

class ArrayClassTest extends TestCase
{
    public function testBasix(): void
    {
        $foo = Words::loremIpsumVocabular();

        $this->assertInstanceOf('P7WebCollector\Type\ArrayClass', $foo);
        $this->assertTrue(is_int(count($foo)));
        $this->assertTrue(count($foo) === count($foo));
        $this->assertTrue(is_iterable($foo));
        $this->assertTrue(is_countable($foo));
        $this->assertInstanceOf('ArrayAccess', $foo);
        $this->assertInstanceOf('Countable', $foo);
        $this->assertInstanceOf('Iterator', $foo);
    }

    public function testBasicOperations(): void
    {
        $foo = new ArrayClass(['Peter Parker']);
        $foo->push('Tony Stark');

        $this->assertTrue(count($foo)===2);
        $this->assertTrue($foo->get(0) === 'Peter Parker');
        $this->assertTrue($foo->get(1) === 'Tony Stark');

        $this->assertTrue($foo->get(0) === $foo[0]);
        $this->assertTrue($foo->get(1) === $foo[1]);

        $this->assertTrue(is_iterable($foo));
        
        $foo->push('Susan Storm');

        $this->assertTrue($foo->shift() === 'Peter Parker');
        $this->assertTrue($foo->pop() === 'Susan Storm');
        $this->assertTrue(count($foo) ===1);


        $this->assertTrue($foo[0] ===  'Tony Stark');
        $this->assertTrue($foo->pop() === 'Tony Stark');
        $this->assertTrue(count($foo) === 0);
        
        $this->assertTrue($foo->empty());
        

    }

    // FIXME - switch to data provider
    public function testWalking()
    {
        $a = ['alpha', 'beta', 'omicron', 'Foo'];

        $objA = new ArrayClass($a);
            
        $objA->walk(function(& $item) {
            $item = (new StringClass($item))->toUpper();
        });
        //var_dump($objA);die;
        for($i = 0; $i < count($a); $i++) {
                $this->assertEquals((string) $objA[$i], strtoupper($a[$i]));
        }
    }

    public function testUniquing(): void
    {
        $foo = new ArrayClass(
            [
                'Alpha',
                'Beta',
                'Beta',
                'Omicron Basic',
                'Turbo Pascal',
                'Beta'
            ]
        );
        $this->assertTrue(count($foo) === 6);
        $foo->removeDuplicates();
        $this->assertTrue(count($foo) === 4);
        $this->assertTrue($foo->get(0) === 'Alpha');
        $this->assertTrue($foo->get(1) === 'Beta');
        $this->assertTrue($foo->get(3) === 'Omicron Basic');
        $this->assertTrue($foo->get(4) === 'Turbo Pascal');
    }

}
