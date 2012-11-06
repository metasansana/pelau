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
     * Handler for this session
     * @var \SessionHandlerInterface $handler
     * @access private
     */
    private $handler;

    /**
     * Constructs a new InactiveHttpSession
     * @param string $id  = "PFSIDSTART"    The id that will be used as the session name.
     * @param \SessionHandlerInterface $handler    Optional save handler.
     */
    public function __construct($id = "PFSIDSTART", \SessionHandlerInterface $handler = null)
    {

        $this->id = $id;
        $this->handler  = $handler;

    }


    public function activate()
    {

        if(session_status() === PHP_SESSION_ACTIVE)
               throw new SessionExistsException;

        if($this->handler)
            session_set_save_handler ($this->handler);

        session_name($this->id);

        return session_start();

    }



    public function destroy()
    {

    }

    /**
     * @inheritdoc
     * @return false    Since this is an inactive state, no values are available.
     */
    public function getPrevious()
    {

    }

    public function regenerate()
    {

    }

    public function put($key, $value)
    {

    }

}

