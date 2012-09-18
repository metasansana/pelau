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
final class HttpRequest
{

    const  URI = "REQUEST_URI";
    const  IPREMOTE =  "REMOTE_ADDR";
    const  METHOD = "REQUEST_METHOD";

    /**
     * Http methods
     */
    const GET = "GET" ;
    const POST = "POST" ;
    const HEAD = "HEAD" ;
    const PUT = "PUT";


    public function getProperty($property)
    {

        if(array_key_exists($property, $_SERVER))
                return $_SERVER[$property];

        throw new HttpRequestException("Bad key detected!");


    }

}