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
     * Constructs a new HttpEvent type object.
     * @param proof\net\http\HttpSource $src
     */
    public function __construct(HttpSource $src)
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


        return new Map($this->params());

    }


}