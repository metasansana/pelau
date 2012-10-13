<?php

namespace proof\http;


/**
 * timestamp Oct 13, 2012 11:23:26 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Class that dispatches http requests as events.
 *
 *
 */
use proof\util\ArrayList;

class HttpEventDispatcher
{

    /**
     * A list of listeners awaiting http events from the visitor.
     * @var proof\util\ArraList $listeners
     * @access private
     */
    private $listeners;

    /**
     * HttpRequest object
     * @var proof\net\http\HttpRequest $request
     * @access private
     */
    private $request;

    /**
     * Constructs a new Visitor object.
     */
    public function __construct(HttpRequest $request)
    {

        $this->listeners = new ArrayList;
        $this->request = $request;

    }

    private function _fireGet()
    {
        foreach($this->listeners as $l)
            $l->onGet(new GetEvent($this->request, $this));

    }

    private function _firePost()
    {
        foreach($this->listeners as $l)
            $l->onPost(new PostEvent($this->request, $this));

    }

    private function _fireHead()
    {
        foreach($this->listeners as $l)
            $l->onHead(new HeadEvent($this->request, $this));

    }

    private function _firePut()
    {
        foreach($this->listeners as $l)
            $l->onPut(new PutEvent($this->request, $this));

    }

    /**
     * Attaches an HttpListener to the dispatcher
     * @param \proof\net\http\HttpListener $l    The HttpListener to be attached.
     * @return \proof\net\http\HttpDispatcher
     */
    public function addHttpListener(HttpListener $l)
    {

        $this->listeners->add($l);

        return $this;

    }

    /**
     * Fires http events
     */
    public function fire()
    {


        $meth = $this->request->getProperty(HttpRequest::METHOD);

        if ($meth === HttpRequest::GET)
            $this->_fireGet();

        if ($meth === HttpRequest::POST)
            $this->_firePost();

        if ($meth === HttpRequest::HEAD)
            $this->_fireHead();

        if ($meth === HttpRequest::PUT)
            $this->_firePut();

    }

}