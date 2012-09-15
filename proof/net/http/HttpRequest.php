<?php
namespace proof\net\http;
/**
 * timestamp Sep 9, 2012 7:33:07 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Class containing information about the current http request.
 *
 */
final class HttpRequest
{

    const GET = "GET" ;
    const POST = "POST" ;
    const HEAD = "HEAD" ;
    const PUT = "PUT";

    /**
     * Returns the type of http method for the current request.
     * @return string    The current HTTP method.
     */
    public function getMethod()
    {

        return strtoupper($_SERVER['REQUEST_METHOD']);

    }

    public function getRequestUri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function getRemoteAddress()
    {
        return $_SERVER['REMOTE_ADDR'];
    }

}