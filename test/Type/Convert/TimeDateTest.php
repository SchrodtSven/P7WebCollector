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


use P7WebCollector\Type\Convert\TimeDate;
use PHPUnit\Framework\TestCase;

class TimeDateTest extends TestCase
{
    protected TimeDate $converter; 

    public function setUp(): void
    {
        $this->converter =  new TimeDate();
    }

    public function testBasix(): void
    {
        $converter = new TimeDate();
        $this->assertInstanceOf(P7WebCollector\Type\Convert\TimeDate::class, $converter);

        // ->format('Y-m-d H:i:s')]]‚
    }

    

    
    /**
     * 
     * @dataProvider dateTimeProvider
     */
    public function testTimestampConverting(int $timestamp, \DateTime $date): void
    {
            $this->assertSame(
                    (new \DateTime())->setTimestamp($timestamp)->format('Y-m-d H:i:s'),
                    $this->converter->dateTime2String($date)

            );
    }



    public function dateTimeProvider(): \Generator
    {
        $startTimeStamp = 29634125; // '1970-12-09 23:42:05'
        $endTimeStamp = 1679913780; // '2023-03-27 10:43:00'
    
       
        for ($i = 0; $i < 11; $i++) {
    
            $currentTimeStamp = rand($startTimeStamp, $endTimeStamp);
            $currentDate = new \DateTime;
            $currentDate->setTimestamp($currentTimeStamp);
            yield [$currentTimeStamp, $currentDate];
            
        }
    
    }

}
