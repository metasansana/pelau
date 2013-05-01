<?php

namespace pelau\net\http;

/**
 * timestamp Sep 8, 2012 9:55:47 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\net\http
 *
 * <p>Parent class of all http request events.</p>
 *
 * PROOF can treat incomming http requests as events (POST, GET, HEAD). Each time a user access
 * a page, a new event can be constructed and passed to classes written to handle it.
 *
 *
 *
 */
use pelau\util\Map;

class Request
{

    private $params;

    private $headers;

    public function __construct(array $params)
    {

        $this->params = new Map($params);

        $this->headers = new Map($_SERVER);

    }

    public function getParameter($name)
    {
        if($this->params[$name])
        return $this->params[$name];

    }

    public function getParameters()
    {
        return new Map($this->params->toArray());
    }

    public function getHeader($key)
    {
        return $this->headers[$key];

    }

    public function getSession($start=true)
    {
        return new Session($start);
    }

}