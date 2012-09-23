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
 */
class HttpSessionManager implements HttpSessionController
{

    /**
     * @todo KeyGenerator
     * @var
     * @access
     */
    private $kgen;

    public function destroy()
    {

        echo "Session name: ".session_name();
        if (ini_get("session.use_cookies"))
        {
            $params = session_get_cookie_params();
            setcookie(
                    session_name(), '', time() - (time() + 100),
                    $params["path"], $params["domain"], $params["secure"], $params["httponly"]
                           );
        }
        session_destroy();

    }

    public function isActive()
    {
        if(session_status() === PHP_SESSION_ACTIVE)
        {
            return TRUE;
        }

        return FALSE;

    }

    public function regenerate()
    {
        session_regenerate_id(TRUE);
    }

    public function start($name=NULL)
    {
        if($name)
        {
            session_name($name);
        }
        else
        {

            session_name();
        }

        session_start();




    }

}