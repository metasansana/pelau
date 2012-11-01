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
 *  Class representing an HTTP request made by a user of a web application.
 *
 */
class HttpRequest
{
    /**
     * Returns a property of the request.
     * @param string $key
     * @return mixed
     */
    public static function getProperty($key)
    {

                return @$_SERVER[$key];
    }

}