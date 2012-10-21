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
use proof\net\http\HttpSource;
use proof\net\http\HttpRequest;
use proof\net\http\HttpEventDispatcher;
use proof\net\http\HttpListener;

class Visitor implements HttpSource
{

    /**
     * Internal HttpRequest object.
     * @var proof\net\http\HttpRequest $request
     * @access private
     */
    private $request;

    /**
     * Internal HttpEventDispatcher.
     * @var proof\net\http\HttpEventDispatcher $dispatch
     * @access private
     */
    private $dispatch;


    public function __construct()
    {

        $this->request = new HttpRequest;
        $this->dispatch = new HttpEventDispatcher($this->request, $this);

    }

    public function addListener(HttpListener $l)
    {

        $this->dispatch->addListener($l);

        return $this;

    }

    public function getCommands()
    {

        $cmds = new Stack((new String($this->request->getProperty(HttpRequest::URI)))->split('/'));  //@todo URLDecoder

        $cmds->pop();

        return $cmds;

    }

    public function visit()
    {

        $this->dispatch->fire();
    }


}