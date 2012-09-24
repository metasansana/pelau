<?php
namespace proof\app\web;
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
use proof\net\http\GetEvent;
use proof\net\http\PostEvent;
use proof\net\http\HeadEvent;
use proof\net\http\PutEvent;
use proof\net\http\HttpEvent;
use proof\net\http\HttpSource;
use proof\php\String;

final class Visitor extends Object implements HttpSource
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

     private function _fire(HttpEvent $e)
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
        $this->_fire(new GetEvent($this->request, $this));
    }

    private function _doPost()
    {
        $this->_fire(new PostEvent($this->request, $this));
    }

    private function _doHead()
    {
        $this->_fire(new HeadEvent($this->request, $this));
    }

    private function _doPut()
    {
        $this->_fire(new PutEvent($this->request, $this));
    }

    /**
     * Attaches an HttpListener to the visitor
     * @param \proof\net\http\HttpListener $l    The HttpListener to be attached.
     * @return \proof\app\Visitor
     */
    public function addHttpListener(HttpListener $l)
    {

        $this->listeners->add($l);

        return $this;
    }

    /**
     * Returns the ip address of the visitor.
     * @return String
     */
    public function getRemoteAddress()
    {
        //@todo in future this should return an IPAddress object.
        return new String($this->request->getProperty(HttpRequest::IPREMOTE));

    }

    public function getUrl()
    {
        return new Url(new String($this->request->getProperty(HttpRequest::URI)));
    }

    /**
     * Simulates the visitor submitting http requests.
     */
    public function visit()
    {


         $meth = $this->request->getProperty(HttpRequest::METHOD);

         if ($meth=== HttpRequest::GET)
            $this->_doGet();

        if ($meth=== HttpRequest::POST)
            $this->_doPost();

        if ($meth=== HttpRequest::HEAD)
            $this->_doHead();

        if ($meth=== HttpRequest::PUT)
            $this->_doPut();

    }


}