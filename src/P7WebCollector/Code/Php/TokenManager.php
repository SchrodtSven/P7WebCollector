<?php

declare(strict_types=1);
/**
 * Class managing (lists of ) instances of \PhpToken incl. 
 * 
 *  - filter operations
 *  - transformations 
 * - ...
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-04-05
 */

namespace P7WebCollector\Code\Php;
use P7WebCollector\Code\Php; 
use P7WebCollector\Type\StringClass;
use P7WebCollector\Type\ArrayClass;
use P7WebCollector\Type\Operational\ArrayFilter;
use P7WebCollector\Code\Php\TokenFilter;

class TokenManager
{
    public static function getByString(string $code, bool $asFilter=false): ArrayClass | ArrayFilter
    {
       $tokens =  new ArrayClass(
            \PhpToken::tokenize(
                $code,
                \TOKEN_PARSE
            )
        );

        return ($asFilter) 
            ? $tokens->filter() 
            : $tokens;
    }

    public static function getByFilename(string $file, bool $asFilter=false): ArrayClass | ArrayFilter
    {
        return self::getByString(
            file_get_contents($file), 
            $asFilter
        );
    }


    public function isClassType(\PhpToken $token): bool 
    {
        return $token->is([T_CLASS, T_INTERFACE, T_TRAIT]);
    }

    public function isTTag(\PhpToken $token): bool
    {
        return $token->is([T_CLOSE_TAG, T_OPEN_TAG]);
    }

    public function isTFunction(\PhpToken $token): bool
    {
        return $token->is([T_FUNCTION]);
    }

   public function isInList(\PhpToken $token, array $list): bool
    {
        return $token->is($list);
    }

    //file_get_contents('public/foo.php')
}