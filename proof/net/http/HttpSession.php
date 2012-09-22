<?php

namespace proof\net\http;


/**
 * timestamp Sep 20, 2012 5:29:07 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http;
 *
 *  Class representing a PHP session.
 *
 */
class HttpSession
{

    /**
     * Default name for session cookies.
     */

    const DEFAULT_NAME = 'PrefZZ';

    public function __construct($name = NULL)
    {

        session_name(Session::DEFAULT_NAME);

        session_start();

    }

    public function regenerate($reset = FALSE)
    {

        session_regenerate_id($reset);

        return $this;

    }

    /**
     * Destroys the current session.
     * @return \callow\http\session\Session
     */
    public function destroy()
    {


// $params = session_get_cookie_params();
//
// $params['http_only'] = &$params['httponly'];
//
// $params['name'] = session_name();
//
// $params['value'] = '';
//
// $params['expiration'] = time() - 130000;
//
// $cw = new CookieWriter($params);
//
// $cw->send();

        session_destroy();

        $_SESSION = array ();

        return $this;

    }

    public function get($key)
    {
        if (array_key_exists($key, $_SESSION))
            return $_SESSION[$key];

    }

    public function put($key, $value)
    {
        $_SESSION[$key] = $value;
        return $this;

    }

}