<?php

namespace proof\net\http;

/**
 * timestamp Nov 5, 2012 4:40:29 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Class representing an active session state.
 *
 */
use proof\util\Map;

class ActiveHttpSession implements HttpSessionState
{

    public function begin()
    {

    }

    public function destroy()
    {

        if (ini_get("session.use_cookies"))
        {

            $params = session_get_cookie_params();

            setcookie
                    (

                    session_name(), '', time() - (time() + 1000),
                    $params["path"], $params["domain"], $params["secure"], $params["httponly"]

                    );

        }

        session_destroy();

    }

    public function getPrevious()
    {

        $map = $_SESSION;

        return new Map($map);

    }

    public function regenerate()
    {

        return session_regenerate_id(TRUE);

    }

    public function store($key, $value)
    {

        $_SESSION[$key] = $value;

        return $this;

    }

}