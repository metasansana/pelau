<?php
namespace proof\net\http;

/**
 * timestamp Sep 8, 2012 9:55:47 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 * <p>Parent class of all http request events.</p>
 *
 * PROOF can treat incomming http requests as events (POST, GET, HEAD). Each time a user access
 * a page, a new event can be constructed and passed to classes written to handle it.
 *
 *
 *
 */
use proof\php\Object;
use proof\util\Event;
use proof\util\Map;



abstract class HttpEvent extends Event
{

    /**
     * The HttpRequest associated with this event.
     * @var proof\net\http\Request
     * @access protected
     */
    protected $request;

    /**
     * The parameters associated with the request.
     * @var proof\util\Map
     * @access protected
     */
    protected $params;

    /**
     * Constructs a new HttpEvent type object.
     * @param \proof\net\http\HttpRequest $request
     * @param Object $src
     */
    public function __construct(HttpRequest $request, HttpSource $src)
    {

        $this->request = $request;

        parent::__construct($src);

    }

     /**
     * Returns the parameters for this event.
     */
    abstract protected function params();

    /**
     * Returns the parameters associated with this HttpEvent (NULL if non exists).
     * @return proof\util\Map|NULL
     */
    public function getParameters()
    {

        return new Map($this->params());

    }

    public function getRequest()
    {
        return $this->request;
    }

<<<<<<< HEAD
    /**
     * Returns a single parameter value from the request.
     * @param mixed $name    The name of the desired parameter.
     * @return mixed
     */
    public function getParameter($name)
    {
        if($this->params->indexAt($name))
            return $this->params->get($name);
    }


=======
>>>>>>> c9df16bb5a7e5f1ce1c625147f91e9a7604ed1e9



}