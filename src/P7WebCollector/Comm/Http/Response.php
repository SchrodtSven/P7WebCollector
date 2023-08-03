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

class Response
{
    private string $headers;

    private string $payload;

    private string  $statusLine = '';

    private ArrayClass $parsedHeaders;

    private int $statusCode;

    public function __construct()
    {
        $this->parsedHeaders = new ArrayClass([]);
    }

    public static function factory()
    {
        return new self();
    }

    /**
     * @return string
     */
    public function getHeaders(): string
    {
        return $this->headers;
    }

    /**
     * @param string $headers
     * @return Response
     */
    public function setHeaders(string $headers): self
    {
        $this->headers = $headers;
        return $this;
    }


    /**
     * @param string $name
     * @param string $value
     * @return $this
     */
    public function setParsedHeader(string $name, string $value): self
    {
        $this->parsedHeaders->setByKey($name, $value);
        return $this;
    }

    public function getParsedHeader(string $name)
    {
        return $this->parsedHeaders->getByKey($name);
    }

    /**
     * @return string
     */
    public function getPayload(): string
    {
        return $this->payload;
    }

    /**
     * @param string $payload
     * @return Response
     */
    public function setPayload(string $payload): self
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusLine(): string
    {
        return $this->statusLine;
    }

    /**
     * @param string $statusLine
     * @return Response
     */
    public function setStatusLine(string $statusLine): self
    {
        $this->statusLine = $statusLine;
        return $this;
    }

    /**
     * @return ArrayClass|StringClass
     */
    public function getParsedHeaders(): ArrayClass|StringClass
    {
        return $this->parsedHeaders;
    }

    /**
     * @param ArrayClass|StringClass $parsedHeaders
     * @return Response
     */
    public function setParsedHeaders(ArrayClass|StringClass $parsedHeaders): self
    {
        $this->parsedHeaders = $parsedHeaders;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return Response
     */
    public function setStatusCode(int $statusCode): self
    {
        $this->statusCode = $statusCode;
        return $this;
    }


    /**
     * @deprecated
     */
    public static function parseResponseString(string $response): self
    {
        $instance = new self();
        $tmp = (new StringClass($response))->splitBy(Protocol::MESSAGE_SEPARATOR);
        $instance->setHeaders($tmp->get(0));
        $instance->setPayload($tmp->get(1));
        $tmp = (new StringClass($instance->headers))->splitBy(Protocol::HEADER_SEPARATOR);
        $instance->setStatusLine($tmp->shift());
        $tmp->walk(function($item) use($instance){
            $t = (new StringClass($item))->splitBy(': ');
            $instance->setParsedHeader($t->get(0), $t->get(1));
        });
        return $instance;
    }
}