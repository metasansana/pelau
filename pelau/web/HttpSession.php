<?php

namespace pelau\web;


/**
 * timestamp Sep 23, 2012 1:26:53 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\web
 *
 *
 * Class representing an http session.
 *
 */
class HttpSession implements HttpSessionState
{

    /**
     * Internal state of this session.
     * @var pelau\web\HttpSessionState $state
     * @access private
     */
    private $state;


    /**
     * Constructs a new HttpSession
     * @param string $id  = "PFSIDSTART"    The id that will be used as the session name.
     * @param \SessionHandlerInterface $h    Optional save handler.
     */
    public function __construct($id = "PFSIDSTART", \SessionHandlerInterface $h = null)
    {

        $this->state = new InactiveHttpSession($id, $h);

    }

    public function activate()
    {

        if($this->state->activate())
        {

            $this->state = new ActiveHttpSession();

            return true;

        }

    }

    public function destroy()
    {

        return $this->state->destroy();

    }

    public function regenerate()
    {

        return $this->state->regenerate();

    }

    public function getPrevious()
    {

        return $this->state->getPrevious();

    }

    public function put($key, $value)
    {

        $this->state->put($key, $value);

        return $this;

    }

    public function isActive()
    {

        if($this->state instanceof ActiveHttpSession)

            return true;

        return false;

    }

}