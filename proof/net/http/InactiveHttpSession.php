<?php
namespace proof\net\http;
/**
 * timestamp Nov 5, 2012 4:32:34 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Class representing an inactive session state.
 *
 */
class InactiveHttpSession implements HttpSessionState
{

   /**
     * The session id.
     * @var string $id
     * @access private
     */
    private $id;

    /**
     * Constructs a new InactiveHttpSession
     * @param string $id  = "PFSIDSTART"    The id that will be used as the session name.
     */
    public function construct($id = "PFSIDSTART")
    {

        $this->id = $id;

    }


    public function begin()
    {

        if(session_status() === PHP_SESSION_ACTIVE)
               throw new SessionExistsException;

        session_name($this->id);

        return session_start();

    }



    public function destroy()
    {

    }

    public function getPrevious()
    {

    }

    public function regenerate()
    {

    }

    public function store($key, $value)
    {

    }

}

