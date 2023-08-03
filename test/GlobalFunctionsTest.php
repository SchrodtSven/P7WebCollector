<?php

declare(strict_types=1);
/**
 * Testing global functions
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-04-05
 */


use P7WebCollector\Type\StringClass;
use P7WebCollector\Type\ArrayClass;
use PHPUnit\Framework\TestCase;


class GlobalFunctionsTest extends TestCase
{
    

    /**
     * @dataProvider exampleProvider
     */
    public function testIfIsStringable(mixed $a, mixed $b, mixed $c): void
    {
        
        $this->assertTrue(is_stringable($a) === $c);
    }

    /**
     * @dataProvider exampleProvider
     */
    public function testStringify(mixed $a, mixed $b, mixed $c): void
    {
        $this->assertTrue(stringify($a) === $b);
    }

    public function exampleProvider(): array
    {
        return [
            ['foo', 'foo', true],
            [23, '23', true],
            [new StringClass('Bar'), 'Bar', true],
            [new \stdClass(), 'null', false]
        ];
    }
}