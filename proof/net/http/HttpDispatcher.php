<?php

namespace proof\net\http;


/**
 * timestamp Oct 13, 2012 11:23:26 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Class that dispatches http events on behalf of other classes.
 *
 *
 */
use proof\util\ArrayList;

class HttpDispatcher implements HttpSource
{

    /**
     * A list of listeners awaiting http events from the visitor.
     * @var proof\util\ArraList $listeners
     * @access private
     */
    private $listeners;

    /**
     * The HttpSource that will become the source of events generated.
     * @var proof\net\http\HttpAgent $src
     * @access private
     */
    private $src;

    /**
     * Constructs a new HttpEventDispatcher object.
     * @param \proof\net\http\HttpClient $src    The HttpClient object that will become the source of http events.
     */
    public function __construct(HttpClient $src)
    {

        $this->listeners = new ArrayList;
        $this->src = $src;

    }

    private function _fireGet()
    {
        foreach($this->listeners as $l)
            $l->onGet(new GetEvent($this->src));

    }

    private function _firePost()
    {
        foreach($this->listeners as $l)
            $l->onPost(new PostEvent($this->src));

    }

    private function _fireHead()
    {
        foreach($this->listeners as $l)
            $l->onHead(new HeadEvent($this->src));

    }

    private function _firePut()
    {
        foreach($this->listeners as $l)
            $l->onPut(new PutEvent($this->src));

    }

    /**
     * Attaches an HttpListener to the dispatcher
     * @param \proof\net\http\HttpListener $l    The HttpListener to be attached.
     * @return \proof\net\http\HttpDispatcher
     */
    public function addListener(HttpListener $l)
    {

        $this->listeners->add($l);

        return $this;

    }

    /**
     * Fire an http events
     */
    public function fire()
    {


        $meth = HttpRequest::getProperty("REQUEST_METHOD");

        if ($meth === "GET")
            $this->_fireGet();

        if ($meth === "POST")
            $this->_firePost();

        if ($meth === "HEAD")
            $this->_fireHead();

        if ($meth === "PUT")
            $this->_firePut();

    }

}