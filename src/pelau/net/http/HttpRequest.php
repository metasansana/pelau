<?php
namespace pelau\net\http;
/**
 * timestamp Sep 9, 2012 7:33:07 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\net\http
 *
 *  Class for querying the properties of an HTTP request.
 *
 */
use pelau\php\Object;


class HttpRequest extends Object
{
    /**
     * Returns a property of the request.
     * @param string $key
     * @return mixed
     */
    public function getProperty($key)
    {

                return $_SERVER[$key];

    }


}