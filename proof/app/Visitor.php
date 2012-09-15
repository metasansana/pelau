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
use proof\php\String;
use proof\util\ArrayList;
use proof\net\http\HttpRequest;
use proof\net\http\HttpListener;



final class Visitor extends Object
{

    /**
     * A list of listeners awaiting http events from the visitor.
     * @var proof\util\ArraList $listeners
     * @access private
     */
    private $listeners;

    /**
     * The http request associated with this visitor.
     * @var proof\net\http\HttpRequest $request
     * @access private
     */
    private $request;

    /**
     * Constructs a new Visitor object.
     */
    public function __construct()
    {
        $this->listeners = new ArrayList;
        $this->request = new HttpRequest;
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
     * Returns the HttpRequest associated with this object.
     * @return proof\net\http\HttpRequest    The HttpRequest associated with this object.
     */
    public function getRequest()
    {

        return $this->request;

    }

    /**
     * Returns the user agent string (if any).
     * @return String
     */
    public function getUserAgentString()
    {
        return new String($_SERVER['HTTP_USER_AGENT']);

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

    public function visit()
    {

         if ($this->request->getMethod() === HttpRequest::GET)
            $this->_doGet();

        if ($this->request->getMethod() === HttpRequest::POST)
            $this->_doPost();

        if ($this->request->getMethod() === HttpRequest::HEAD)
            $this->_doHead();

        if ($this->request->getMethod() === HttpRequest::PUT)
            $this->_doPut();

    }

}