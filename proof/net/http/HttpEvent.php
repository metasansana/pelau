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
use proof\util\Event;
use proof\util\Map;



abstract class HttpEvent extends Event
{

    /**
     * The parameters associated with the request.
     * @var proof\util\Map
     * @access protected
     */
    protected $params = array();

    /**
     * Constructs a new HttpEvent type object.
     * @param proof\net\http\HttpClient $src
     */
    public function __construct(HttpClient $src)
    {


        parent::__construct($src);

    }

     /**
     * This method is called internally to set the parameters of the event.
     */
    abstract protected function params();

    /**
     * Returns the parameters associated with this HttpEvent (NULL if non exists).
     * @return proof\util\Map|NULL
     */
    public function getParameters()
    {

        $this->params();
        return new Map($this->params);

    }

    /**
     * Returns a single parameter value from the request.
     * @param mixed $name    The name of the desired parameter.
     * @return mixed    The value of the requested key.
     */
    public function getParameter($name)
    {

        if($this->params->indexAt($name))
            return $this->params->get($name);
    }


}