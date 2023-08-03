<?php

declare(strict_types=1);
/**
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-28
 */


use PHPUnit\Framework\TestCase;
use P7WebCollector\Code\Php;
use P7WebCollector\Code\Php\Variable;
use P7WebCollector\Type\StringClass;

class PhpTest extends TestCase
{
    private Php $php;

    public function setUp(): void
    {
        $this->php = new Php();
    }

    /**
     * @dataProvider scalarExampleProvider
     */
    public function testIfHandlingForScalarValuesWorksCorrectly(mixed $a, mixed $b): void
    {
        $this->assertSame((string) $b, (string) $this->php->handleScalarValueForAssignment($a));
        $this->assertInstanceOf(Php::class, $this->php);
    }
    
   

    /**
     * 
     * @dataProvider exampleTypeProvider
     * 
     */
    public function testIfTypeIsMatchedCorrectlyByExample(mixed $example, string $type)
    {
        $this->assertSame((string) $this->php->matchTypeByExample($example), $type);
        $this->assertSame(2+2, 4);
    }

    /**
     * 
     * @dataProvider scalarProvider
     */
    public function testVariableAssignmentCreation(mixed $a)
    {
        //echo $this->php->handleValueForAssignment($b);
        //die;

        $var = new Variable('Foo', $a   );

        echo $this->php->getVariableAssignment($var);
        echo  PHP_EOL;
        $this->assertTrue(2+3 === 5);
    }
     
    public function exampleTypeProvider() : array
    {
        return [
            [new \stdClass(), 'stdClass'],
            [new \DateTime, 'DateTime'],
            [new StringClass(), 'P7WebCollector\Type\StringClass'],
            [23, 'int'],
            [44 === 45, 'bool'],
            [2*3 == 6, 'bool'],
            [1.209, 'float'],
            ['Foo', 'string'], 
            [null, 'NULL']
        ];
    }

    public function scalarExampleProvider(): array
    {
        return [
            [23, 23],
            [44 === 45, 'false'],
            [2*3 == 6, 'true'],
            [1.209, 1.209],
            ['Foo', "'Foo'"], 
            [null, 'null']
        ];
    }

    public function scalarProvider(): array
    {
        return [
                [false], 
                [true], 
                [1.209], 
                ['Foo'], 
                [null],
                [9990]
        ];

    }
}