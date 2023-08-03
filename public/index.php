<?php

declare (strict_types = 1);

echo '<pre>';

// Set project root as current working directory
//chdir('../');
require_once 'src/P7WebCollector/Autoload.php';
use P7WebCollector\Type\StringList;
use P7WebCollector\Type\Scalar\StringClass;
ini_set('assert.exception', 1);

try {
    assert(2 +2  === 4);
    assert(2 === 1+1);
    assert(2 === 3+3);
} catch (\AssertionError $e)
{
    echo $e->getMessage();
    var_dump($e); 
}

