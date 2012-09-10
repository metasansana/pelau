<?php

namespace proof\app;

/**
 * timestamp Sep 9, 2012 7:22:32 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app
 *
 *  Class representing a requesting user agent (browser).
 *
 */
use proof\util\ArrayList;
use proof\net\http\HttpListener;
use proof\net\http\Request;
use proof\util\Event;
use proof\net\http\GetEvent;
use proof\net\http\PostEvent;
use proof\net\http\HeadEvent;
use proof\net\http\PutEvent;

class UserAgent
{

    /**
     * Internal list of HttpListeners.
     * @var proof\util\ArrayList
     * @access private
     */
    private $listeners;

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

    private function _doGet()
    {
        $this->_fire(new GetEvent($this));
    }

    private function _doPost()
    {
        $this->_fire(new PostEvent($this));
    }

    private function _doHead()
    {
        $this->_fire(new HeadEvent($this));
    }

    private function _doPut()
    {
        $this->_fire(new PutEvent($this));
    }

    /**
     * Adds an HttpListener to the internal list.
     * @param \proof\net\http\HttpListener $l    The listener to be added.
     * @return \proof\app\UserAgent
     */
    public function addListener(HttpListener $l)
    {
        $this->listeners->add($l);
        return $this;

    }

    /**
     * Simulates a request by the user agent.
     */
    public function request()
    {

        if (Request::getMethod() === Request::GET)
            $this->_doGet();

        if (Request::getMethod() === Request::POST)
            $this->_doPost();

        if (Request::getMethod() === Request::HEAD)
            $this->_doHead();

        if (Request::getMethod() === Request::PUT)
            $this->_doPut();

    }

}