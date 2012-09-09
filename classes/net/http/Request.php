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
 *  Class containing various methods for getting information about the current request.
 *
 */
final class Request
{

    const GET = "GET" ;
    const POST = "POST" ;
    const HEAD = "HEAD" ;
    const PUT = "PUT";

    static public function getMethod()
    {

        $meth = $_SERVER['REQUEST_METHOD'];

       if(! $meth === Request::GET|Request::POST|Request::HEAD|Request::PUT)
           throw new UnknownHttpMethodException();

       return $meth;

    }

}