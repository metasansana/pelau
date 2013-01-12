<?php
namespace pelau\app\web;
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
use pelau\net\http\HttpAgent;
use pelau\net\http\HttpRequest;
use pelau\net\http\HttpDispatcher;
use pelau\net\http\HttpListener;
use pelau\util\ArrayList;
use pelau\php\String;

class UserAgent implements HttpAgent
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