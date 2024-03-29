<?php

declare(strict_types=1);
/**
 * Class representing http response(s)
 * 
 * @FIXME -> use P3tite\Communication\Http\Parser!!
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P3tite
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-15
 * 
 */

 namespace P7WebCollector\Comm\Http;
 use \P7WebCollector\Type\ArrayClass;
 use \P7WebCollector\Type\StringClass;

class CurlClient implements ClientInterface
{
    private \CurlHandle $curlHandle;

    private string $uri;

    private Response $response;

    private ArrayClass $parameters;

    private Parser $parser;

    /**
     * Used HTTP request method
     *
     * @var string
     */
    private string $method;

    /**
     * Used time to live for connection in seconds
     *
     * @var int
     */
    private int $ttl = 500;


    public function __construct(string $uri = 'https://www.example.org/')
    {
        if (!function_exists('curl_version')) {
            throw new \ErrorException('Extension cURL needed!');
        }
        $this->uri = $uri;
        $this->parameters = new ArrayClass([]);
        $this->curlHandle = curl_init();
        $this->parser = new Parser();

    }

    private function init()
    {


        $this->setCurlOption(\CURLOPT_CUSTOMREQUEST, $this->method);
        //Sending header within response

        // Setting URI for current request
        $this->setCurlOption(CURLOPT_URL, $this->uri);

        // Returning response instead of writing to STDOUT
        $this->setCurlOption(CURLOPT_RETURNTRANSFER, true);

        // Setting timeout for connection creation
        $this->setCurlOption(CURLOPT_CONNECTTIMEOUT, $this->ttl);

        // Reading response headers
        $this->setCurlOption( CURLINFO_HEADER_OUT, 1);

        // Setting TTL for running cUrl functions
        $this->setCurlOption(CURLOPT_TIMEOUT, $this->ttl);

        // Reading response headers
        $this->setCurlOption(CURLOPT_HEADER, 1);

        // Disabling SSL peer check
        $this->setCurlOption(CURLOPT_SSL_VERIFYPEER, false);

    }

    public function process(string $uri, string $method = 'GET'): self
    {

        $this->setMethod($method);

        if ($uri != '') {
            $this->uri = $uri;
        }

        // build query param string from ArrayClass
        
        $queryString = http_build_query($this->parameters->getContent());
        switch ($this->method) {

            case 'GET':
            case 'DELETE':
                // For GET and DELETE we send parameters within URI as query string
                $this->uri .= '?' . $queryString;
                break;

            case 'POST':
            case 'PUT':
                // For PUT and POST we send parameters in payload
                $this->setCurlOption(CURLOPT_POSTFIELDS, $queryString);
                break;

        }
        $this->init();
        $this->response = $this->parser->parseResponseString(curl_exec($this->curlHandle));
        $this->response->setStatusCode(curl_getinfo($this->curlHandle, CURLINFO_HTTP_CODE));
        return $this;
    }

    
    public function getMethod(): string
    {
        return $this->method;
    }

    public function setCurlOption(int $option, $value)
    {
        curl_setopt($this->curlHandle, $option, $value);
    }

    /**
     * @param string $method
     * @return CurlClient
     */
    public function setMethod(string $method): self
    {
        $this->method = strtoupper($method);
        return $this;
    }

    public function setParameters(array $parameters): self
    {
        $this->parameters = new ArrayClass($parameters);
        return $this;
    }

    public function getParameters(): ArrayClass
    {
        return $this->parameters;
    }

    public function setParameter(string $name, $value)
    {
        $this->parameters->setByKey($name, $value);
    }

    public function getParameter(string $name)
    {
        $this->parameters->getByKey($name);
    }

   
    public function getUri(): string
    {
        return $this->uri;
    }

    public function setUri(string $uri): self
    {
        $this->uri = $uri;
        return $this;
    }

  
    public function getTtl(): int
    {
        return $this->ttl;
    }

  
    public function setTtl(int $ttl): self
    {
        $this->ttl = $ttl;
        return $this;
    }


    public function getResponse(): Response
    {
        return $this->response;
    }

    public function post(string $uri = ''): self
    {
        $this->process($uri, 'POST');
        return $this;
    }

    public function put(string $uri = ''): self
    {
        $this->process($uri, 'PUT');
        return $this;
    }

    public function get(string $uri = ''): self
    {
        $this->process($uri, 'GET');
        return $this;
    }

    public function delete(string $uri = ''): self
    {
        $this->process($uri, 'DELETE');
        return $this;
    }

}