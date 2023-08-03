<?php

declare (strict_types = 1);
/**
 * Class for configuration of unit tests running with PHPUnit
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-07
 */

namespace P7WebCollector\Type\Convert;

class PhpUnit
{
    private int $dateTimeProviderRunnings = 10;


    

    /**
     * Get the value of dateTimeProviderRunnings
     *
     * @return int
     */
    public function getDateTimeProviderRunnings(): int
    {
        return $this->dateTimeProviderRunnings;
    }

    /**
     * Set the value of dateTimeProviderRunnings
     *
     * @param int $dateTimeProviderRunnings
     *
     * @return self
     */
    public function setDateTimeProviderRunnings(int $dateTimeProviderRunnings): self
    {
        $this->dateTimeProviderRunnings = $dateTimeProviderRunnings;

        return $this;
    }
}
