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

    public function activate()
    {
         //@todo Should a call to ActiveHttpSession::begin force a regeneration? This would eliminate the need for a regenerate method.

    }

    public function destroy()
    {

        if (ini_get("session.use_cookies"))
        {

            $values = session_get_cookie_params();

            $c = new CookieCache ($values["path"], $values["domain"], $values["secure"], $values["httponly"]);

            $c->store(session_name(), '', (time() + 1000));

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

    public function put($key, $value)
    {

        $_SESSION[$key] = $value;

        return $this;

    }

}