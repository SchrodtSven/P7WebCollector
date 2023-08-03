<?php
/**
 * Interface defining public API for Classes implementing filters
 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P3tite
 * @package P3tite
 * @version 0.1
 * @since 2023-04-06
 */

namespace P7WebCollector\Type\Operational;
use P7WebCollector\Type\ArrayClass;

interface Filtering
{
    public function __construct(private ArrayClass $content);
    public function process() : ArrayClass;
}