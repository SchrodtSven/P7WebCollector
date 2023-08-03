<?php

declare (strict_types = 1);
/**
 * Class for parsing parts of http communication - e.g:
 *
 *  - messages
 *  - status codes
 *  - query strings
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-07
 */

namespace P7WebCollector\Comm\Http;

use \P7WebCollector\Type\ArrayClass;
use \P7WebCollector\Type\StringClass;

class Parser
{

    /**
     * Parsing HTTP query strings
     * 
     */
    public function parseQuery(string $query): ArrayClass
    {
        \mb_parse_str($query, $tmp);
        return new ArrayClass($tmp);
    }

    /**
     * Parsing given URI to its parts:
     * 
     * <code>
     * (new Parser)->parseUri('https://adm:pass@marvell.local:8080/Foo/BAr/id/999#endOfPartOne')
     * 
     * [
     *   "scheme"5  => "https",
     *   "host"  => "marvell.local",
     *   "port" => 8080,
     *   "user" => "adm",
     *   "pass" => "pass",
     *   "path" => "/Foo/BAr/id/999",
     *   "fragment" => "endOfPartOne"
     *  ]
     * 
     * </code>
     * 
     * 
     * 
     * 

     */
    public function parseUri(string | StringClass $uri): ArrayClass
    {
        return new ArrayClass(\parse_url((string) $uri));
    }

    /**
     * Parsing current HTTP header to keyed ArrayClass instance
     * 
     * @param \Stringable $header
     * @return ArrayClass
     */
    public function parseHeaders(\Stringable $header): ArrayClass
    {
        $tmp = (new StringClass($header))->splitBy(Protocol::HEADER_SEPARATOR);

        $parsed = new ArrayClass();

        foreach ($tmp as $item) {
            if (!\str_contains($item, ': ')) {
                $parsed['status-line'] = $item;
            } else {
                $line = (new StringClass($item))->splitBy(': ');
                $parsed[$line[0]] = $line[1];
            }
        }
        return $parsed;
    }

    /**
     * Splitting HTTP response message to header and body, parsing its parts
     * 
     * @param \Stringable $responseString
     * @return Response
     */
    public function parseResponseString(\Stringable $responseString): Response
    {
        $instance = new Response();
        $tmp = (new StringClass($responseString))->splitBy(Protocol::MESSAGE_SEPARATOR);
        $instance->setHeaders($tmp->get(0));
        $instance->setPayload($tmp->get(1));
        $headers = $this->parseHeaders($instance->getHeaders());
        $instance->setStatusLine($headers->shift());
        $instance->setParsedHeaders($headers);
        return $instance;
    }

    /**
     * @FIXME to something with sense!!!
     * 
     * @param \Stringable $line
     * @return ArrayClass
     */
    public function parseStatusLine(\Stringable $line): ArrayClass
    {
        //
        return (new StringClass($line))->splitBy(' ');
    }
}
