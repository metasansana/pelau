<?php
namespace proof\app\web;
/**
 * timestamp Oct 21, 2012 4:50:51 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app\web
 *
 *  Class representing a user of a web application.
 *
 */
use proof\net\http\HttpAgent;
use proof\net\http\HttpRequest;
use proof\net\http\HttpDispatcher;
use proof\net\http\HttpListener;
use proof\util\ArrayList;
use proof\php\String;

class UserAgent implements HttpAgent
{


    /**
     * Internal HttpEventDispatcher.
     * @var proof\net\http\HttpDispatcher $dispatch
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

    public function getCommands()
    {

        //@todo URLDecoder
        $cmds = new ArrayList((new String($this->request->getProperty(HttpRequest::URI)))->split('/'));

        $cmds->remove(0);


        return $cmds;

    }

    public function visit()
    {

        $this->dispatch->fire();
    }

    public function getUAString()
    {
        return HttpRequest::getProperty("HTTP_REFERER");
    }


}