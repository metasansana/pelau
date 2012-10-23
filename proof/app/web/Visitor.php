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
use proof\net\http\HttpClient;
use proof\net\http\HttpRequest;
use proof\net\http\HttpEventDispatcher;
use proof\net\http\HttpListener;
use proof\util\ArrayList;
use proof\php\String;

class Visitor implements HttpClient
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

        //@todo URLDecoder
        $cmds = new ArrayList((new String($this->request->getProperty(HttpRequest::URI)))->split('/'));

        
        return $cmds;

    }

    public function visit()
    {

        $this->dispatch->fire();
    }


}