<?php

namespace pelau\net\http;


/**
 * timestamp Oct 13, 2012 11:23:26 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\net\http
 *
 *  Helper class for generating http events.
 *
 *  This class is used internally by the pelau\web\Browser class to furnish http events.
 *
 *
 */
use pelau\util\ArrayList;

class HttpEventGenerator
{

    /**
     * A list of listeners awaiting http events from the visitor.
     * @var pelau\util\ArraList $listeners
     * @access private
     */
    private $listeners;

    /**
     * The HttpSource that will become the source of events generated.
     * @var pelau\net\http\HttpAgent $src
     * @access private
     */
    private $src;

    /**
     *
     * @var pelau\net\http\HttpRequest;
     */
    private $req;



    /**
     * Constructs a new HttpEventDispatcher object.
     * @param \pelau\net\http\HttpClient $src    The HttpSource object that will become the source of http events.
     */
    public function __construct(HttpClient $src, HttpRequest $req)
    {

        $this->listeners = new ArrayList;
        $this->src = $src;
        $this->req = $req;

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
     * @param \pelau\net\http\HttpListener $l    The HttpListener to be attached.
     * @return \pelau\net\http\HttpDispatcher
     */
    public function addListener(HttpListener $l)
    {

        $this->listeners->add($l);

        return $this;

    }

    /**
     * Fire an http event
     */
    public function fire()
    {

        //This is an deal setup for a chain of command pattern.
        //@todo Refactor this class to use commands.

        $meth = $this->req->getProperty("REQUEST_METHOD");

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