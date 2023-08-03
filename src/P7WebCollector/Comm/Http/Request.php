<?php

declare (strict_types = 1);
/**
 * Class representing request object of current http communication
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7WebCollector
 * @package P7WebCollector
 * @version 0.1
 * @since 2023-03-07
 */

namespace P7WebCollector\Comm\Http;

class Request
{
    private ?string $documentRoot;
    private ?string $remoteAddr;
    private ?string $remotePort;
    private ?string $serverSoftware;
    private ?string $serverProtocol;
    private ?string $serverName;
    private ?string $serverPort;
    private ?string $requestUri;
    private ?string $requestMethod;
    private ?string $scriptName;
    private ?string $scriptFilename;
    private ?string $pathInfo;
    private ?string $phpSelf;
    private ?string $httpHost;
    private ?string $httpUpgradeInsecureRequests;
    private ?string $httpAccept;
    private ?string $httpUserAgent;
    private ?string $httpAcceptLanguage;
    private ?string $httpAcceptEncoding;
    private ?string $httpConnection;
    private ?string $queryString;
    private ?float $requestTimeFloat;
    private ?int $requestTime;

    public function __construct()
    {
        $this->__init();
    }

    private function __init()
    {
        $this->documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? null;
        $this->remoteAddr = $_SERVER['REMOTE_ADDR'] ?? null;
        $this->remotePort = $_SERVER['REMOTE_PORT'] ?? null;
        $this->serverSoftware = $_SERVER['SERVER_SOFTWARE'] ?? null;
        $this->serverProtocol = $_SERVER['SERVER_PROTOCOL'] ?? null;
        $this->serverName = $_SERVER['SERVER_NAME'] ?? null;
        $this->serverPort = $_SERVER['SERVER_PORT'] ?? null;
        $this->requestUri = $_SERVER['REQUEST_URI'] ?? null;
        $this->requestMethod = $_SERVER['REQUEST_METHOD'] ?? null;
        $this->scriptName = $_SERVER['SCRIPT_NAME'] ?? null;
        $this->scriptFilename = $_SERVER['SCRIPT_FILENAME'] ?? null;
        $this->pathInfo = $_SERVER['PATH_INFO'] ?? null;
        $this->phpSelf = $_SERVER['PHP_SELF'] ?? null;
        $this->httpHost = $_SERVER['HTTP_HOST'] ?? null;
        $this->httpUpgradeInsecureRequests = $_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'] ?? null;
        $this->httpAccept = $_SERVER['HTTP_ACCEPT'] ?? null;
        $this->httpUserAgent = $_SERVER['HTTP_USER_AGENT'] ?? null;
        $this->httpAcceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? null;
        $this->httpAcceptEncoding = $_SERVER['HTTP_ACCEPT_ENCODING'] ?? null;
        $this->httpConnection = $_SERVER['HTTP_CONNECTION'] ?? null;
        $this->queryString = $_SERVER['QUERY_STRING'] ?? null;
        $this->requestTimeFloat = $_SERVER['REQUEST_TIME_FLOAT'] ?? null;
        $this->requestTime = $_SERVER['REQUEST_TIME'] ?? null;
    }

/**
 * Getter for $getDocumentRoot
 *
 * @return string
 */
    public function getDocumentRoot(): ?string
    {
        return $this->documentRoot;
    }

    /**
     * Getter for $getRemoteAddr
     *
     * @return string
     */
    public function getRemoteAddr(): ?string
    {
        return $this->remoteAddr;
    }

    /**
     * Getter for $getRemotePort
     *
     * @return string
     */
    public function getRemotePort(): ?string
    {
        return $this->remotePort;
    }

    /**
     * Getter for $getServerSoftware
     *
     * @return string
     */
    public function getServerSoftware(): ?string
    {
        return $this->serverSoftware;
    }

    /**
     * Getter for $getServerProtocol
     *
     * @return string
     */
    public function getServerProtocol(): ?string
    {
        return $this->serverProtocol;
    }

    /**
     * Getter for $getServerName
     *
     * @return string
     */
    public function getServerName(): ?string
    {
        return $this->serverName;
    }

    /**
     * Getter for $getServerPort
     *
     * @return string
     */
    public function getServerPort(): ?string
    {
        return $this->serverPort;
    }

    /**
     * Getter for $getRequestUri
     *
     * @return string
     */
    public function getRequestUri(): ?string
    {
        return $this->requestUri;
    }

    /**
     * Getter for $getRequestMethod
     *
     * @return string
     */
    public function getRequestMethod(): ?string
    {
        return $this->requestMethod;
    }

    /**
     * Getter for $getScriptName
     *
     * @return string
     */
    public function getScriptName(): ?string
    {
        return $this->scriptName;
    }

    /**
     * Getter for $getScriptFilename
     *
     * @return string
     */
    public function getScriptFilename(): ?string
    {
        return $this->scriptFilename;
    }

    /**
     * Getter for $getPathInfo
     *
     * @return string
     */
    public function getPathInfo(): ?string
    {
        return $this->pathInfo;
    }

    /**
     * Getter for $getPhpSelf
     *
     * @return string
     */
    public function getPhpSelf(): ?string
    {
        return $this->phpSelf;
    }

    /**
     * Getter for $getHttpHost
     *
     * @return string
     */
    public function getHttpHost(): ?string
    {
        return $this->httpHost;
    }

    /**
     * Getter for $getHttpUpgradeInsecureRequests
     *
     * @return string
     */
    public function getHttpUpgradeInsecureRequests(): ?string
    {
        return $this->httpUpgradeInsecureRequests;
    }

    /**
     * Getter for $getHttpAccept
     *
     * @return string
     */
    public function getHttpAccept(): ?string
    {
        return $this->httpAccept;
    }

    /**
     * Getter for $getHttpUserAgent
     *
     * @return string
     */
    public function getHttpUserAgent(): ?string
    {
        return $this->httpUserAgent;
    }

    /**
     * Getter for $getHttpAcceptLanguage
     *
     * @return string
     */
    public function getHttpAcceptLanguage(): ?string
    {
        return $this->httpAcceptLanguage;
    }

    /**
     * Getter for $getHttpAcceptEncoding
     *
     * @return string
     */
    public function getHttpAcceptEncoding(): ?string
    {
        return $this->httpAcceptEncoding;
    }

    /**
     * Getter for $getHttpConnection
     *
     * @return string
     */
    public function getHttpConnection(): ?string
    {
        return $this->httpConnection;
    }

    /**
     * Getter for $queryString
     *
     * @return string
     */
    public function getQueryString(): ?string
    {
        return $this->queryString;
    }

    /**
     * Getter for $getRequestTimeFloat
     *
     * @return float
     */
    public function getRequestTimeFloat(): ?float
    {
        return $this->requestTimeFloat;
    }

    /**
     * Getter for $getRequestTime
     *
     * @return integer
     */
    public function getRequestTime(): ?int
    {
        return $this->requestTime;
    }

}
