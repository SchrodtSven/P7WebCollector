<?php

declare (strict_types = 1);
/**
 * Class routing http paths (URIs) to endpoints of application (API)
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-07
 */

namespace P7WebCollector\Comm\Http;
use P7WebCollector\Type\ArrayClass;
use P7WebCollector\Type\StringClass;

class Router
{

    private ArrayClass $parts;

    public function __construct(private string $uri = '')
    {
        $tmp = ($uri === '') ? (new StringClass((new Request())->getRequestUri())) : new StringClass($uri);

        // relative uri path or full 
        if($tmp->starts('http'))  {
            $parts = (new Parser)->parseUri($tmp);
            $tmp->setContent($parts['path']);
        }
        $this->parts = $tmp->splitBy('/', true, true);
        //print_r($parts->getContent());
        //\print_r($_SERVER['QUERY_STRING']);
        //$foo = (new Request())->getQueryString();
        //var_dump($foo);
        //\var_dump(\gettype($foo));
        // \var_dump(\is_null($foo));
       // var_dump($tmp);

        // \var_dump(($_SERVER['QUERY_STRING']));
    }



}