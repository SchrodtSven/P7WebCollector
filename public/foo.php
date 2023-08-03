<?php
require_once 'src/P7WebCollector/Autoload.php';

function foo(...$dta)
{
    var_dump($dta);
}


foo(1);
foo('dta', 'Sven', 3.14, "FooBAr");
foo([1,2,3]);
foo(new \P7WebCollector\PhP\Variable);


class Foort
{
    public static function bar(\stdClass $a): void
    {
        //  ... doStuff()
    }
}
?>