<?php
namespace pelau\net\http;
/**
 * timestamp Oct 21, 2012 4:50:51 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\app\web
 *
 *  Class representing a user of a web application.
 *
 */
use pelau\util\ArrayList;
use pelau\util\Map;
use pelau\php\String;

class Visitor implements HttpClient
{

    /**
     * Internal HttpEventDispatcher.
     * @var pelau\net\http\HttpDispatcher $dispatch
     * @access private
     */
    private $dispatch;


    public function __construct()
    {

        $this->dispatch = new HttpDispatcher($this);

    }

    public function addListener(HttpListener $l)
    {

        $this->dispatch->addListener($l);

        return $this;

    }

    public function getUA()
    {
        return new String(HttpRequest::getProperty("HTTP_REFERER"));
    }

    public function getCookies()
    {

        $cookies = $_COOKIE;

        return new Map($cookies);

    }

    public function getResponse($status = null)
    {

        return new HttpResponse($status);

    }


    public function visit()
    {

        $this->dispatch->fire();

    }

}