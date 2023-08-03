<?php

declare(strict_types=1);
/**
 * StringClassTest - unit testing StringClass
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

class StringClassTest extends TestCase
{
     /**
     * Data Provider for case testing 
     * 
     * @return Generator
     */
    public function lowerUpperProvider(): Generator
    {
        foreach(Words::loremIpsumVocabular() as $word) {
            yield [
                new StringClass(strtolower($word)),
                new StringClass(strtoupper($word))
            ];
        }
    }

    /**
     * Testing comparisons on case 
     * 
     * @dataProvider lowerUpperProvider
     * @param string $one
     * @param string $two
     * @return void
     */
    public function testLowerUpperCase(StringClass $one, StringClass $two): void
    {

        $three = $one->clone();

        $this->assertTrue($one->notEquals($two));
        $this->assertTrue($one->equals($three));
        $this->assertTrue($two->notEquals($one));
        $this->assertTrue($two->notEquals($three));
        $this->assertTrue($one->toUpper()->equals($two));
        $this->assertTrue($two->toLower()->equals($three));
    }

    
}