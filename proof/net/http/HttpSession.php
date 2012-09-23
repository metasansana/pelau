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
 *  Class for using HttpSessions.
 * <p>This class is designed to be used with a HttpSessionManager implementor in a bridge like pattern.
 * HttpSession only implements methods for putting and retrieving values, the rest is left to the internal manager.</p>
 *
 */
use proof\php\Stringable;

class HttpSession implements HttpSessionController
{

    /**
     * The manager of this session.
     * @var proof\net\http    $manager
     * @access private
     */
    private $manager;


    public function __construct(HttpSessionManager $manager)
    {

        $this->manager = $manager;


    }

    public function start($name=NULL)
    {

        $this->manager->start($name);

    }

    public function put($key, Stringable $item)
    {

         $_SESSION[$key] = (string)$item;
        return $this;

        return $this;

    }

    public function get($key)
    {

     if(array_key_exists($key, $_SESSION))
                return $_SESSION[$key];
    }

    public function delete($key)
    {

        unset($_SESSION[$key]);

        return $this;
    }

    public function regenerate()
    {

        $this->manager->regenerate();

        return $this;

    }

    public function destroy()
    {

        $this->manager->destroy();

        return $this;

    }

    public function isActive()
    {

        return $this->manager->isActive();

    }

    /**
     * Returns the internal HttpSessionManager
     * @return proof\net\http\HttpSessionManager    A reference to the internal manager.
     */
    public function getManager()
    {
        return $this->manager;
    }


}