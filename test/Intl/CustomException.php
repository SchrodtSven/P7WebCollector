<?php

namespace P7WebCollector\Intl;

class CustomException extends \ErrorException
{

    protected function formatErrorMessage(string $format, ...$params): string
    {
        return \sprintf($format, $params);
    }
    
}