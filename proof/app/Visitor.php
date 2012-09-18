<?php
namespace proof\app;
/**
 * timestamp Sep 14, 2012 10:50:37 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Class representing a user of the web application.
 *
 */
use proof\php\Object;
use proof\util\ArrayList;
use proof\net\http\HttpRequest;
use proof\net\http\HttpListener;
use proof\util\Event;
use proof\net\http\GetEvent;
use proof\net\http\PostEvent;
use proof\net\http\HeadEvent;
use proof\net\http\PutEvent;

final class Visitor extends Object
{

    /**
     * A list of listeners awaiting http events from the visitor.
     * @var proof\util\ArraList $listeners
     * @access private
     */
    private $listeners;


    /**
     * Constructs a new Visitor object.
     */
    public function __construct()
    {
        $this->listeners = new ArrayList;
    }

     private function _fire(Event $e)
    {

        foreach ($this->listeners as $l)
        {
            if ($e instanceof GetEvent)
                $l->onGet($e);

            if ($e instanceof PostEvent)
                $l->onPost($e);

            if ($e instanceof HeadEvent)
                $l->onHead($e);

            if ($e instanceof PutEvent)
                $l->onPut($e);
        }

    }

    private function _doGet(HttpRequest $request)
    {
        $this->_fire(new GetEvent($request, $this));
    }

    private function _doPost(HttpRequest $request)
    {
        $this->_fire(new PostEvent($request, $this));
    }

    private function _doHead(HttpRequest $request)
    {
        $this->_fire(new HeadEvent($request, $this));
    }

    private function _doPut(HttpRequest $request)
    {
        $this->_fire(new PutEvent($request, $this));
    }

    /**
     * Attaches an HttpListener to the visitor
     * @param \proof\net\http\HttpListener $l    The HttpListener to be attached.
     * @return \proof\app\Visitor
     */
    public function attachHttpListener(HttpListener $l)
    {

        $this->listeners->add($l);

        return $this;
    }

    /**
     * Simulates the visitor submitting http requests.
     */
    public function visit()
    {

        $request = new HttpRequest;

        $meth = $request->getProperty(HttpRequest::METHOD);

         if ($meth=== HttpRequest::GET)
            $this->_doGet($request);

        if ($meth=== HttpRequest::POST)
            $this->_doPost($request);

        if ($meth=== HttpRequest::HEAD)
            $this->_doHead($request);

        if ($meth=== HttpRequest::PUT)
            $this->_doPut($request);

    }

}