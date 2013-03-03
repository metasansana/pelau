<?php
namespace pelau\net\http;

/**
 * timestamp Sep 8, 2012 9:55:47 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\net\http
 *
 * <p>Parent class of all http request events.</p>
 *
 * PROOF can treat incomming http requests as events (POST, GET, HEAD). Each time a user access
 * a page, a new event can be constructed and passed to classes written to handle it.
 *
 *
 *
 */
use pelau\util\Event;
use pelau\util\Map;



abstract class HttpEvent extends Event
{


     /**
     * This method is called internally to set the parameters of the event.
     */
    abstract protected function params();

    /**
     * Returns the parameters associated with this HttpEvent (NULL if non exists).
     * @return pelau\util\Map|NULL
     */
    public function getParameters()
    {


        return new Map($this->params());

    }

    public function getURI()
    {
        return new \pelau\net\URI($_SERVER['PATH_INFO']);
    }

    public function getHeaders()
    {
        throw new \pelau\php\UnsupportedOperationException;
    }


}