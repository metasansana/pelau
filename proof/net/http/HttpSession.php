<?php

namespace proof\net\http;


/**
 * timestamp Sep 23, 2012 1:26:53 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *
 * Class representing an http session.
 *
 */
class HttpSession implements HttpSessionState
{

    /**
     * The state of the session
     * @var proof\net\http\HttpSessionState   $state
     * @access private
     */
    private $state;

    /**
     * Constructs a new HttpSession
     * @param string $id  = "PFSIDSTART"    The id that will be used as the session name.
     * @param \SessionHandlerInterface $h    Optional save handler.
     */
    public function construct($id = "PFSIDSTART", \SessionHandlerInterface $h = null)
    {


        $this->state = new InactiveHttpSession($id, $h);

        if ($h)
            session_set_save_handler($h, true);

    }

    public function begin()
    {

        $this->state->begin();

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

    public function store($key, $value)
    {

        $this->state->store($key, $value);

        return $this;

    }

}