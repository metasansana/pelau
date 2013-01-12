<?php
namespace pelau\net\http;
/**
 * timestamp Nov 6, 2012 4:14:42 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\net\http
 *
 * Class for storing client  side cookies.
 *
 */
class CookieCache implements CookieStore
{

    /**
     * The path cookies will be allowed under.
     * @var string $path
     * @access private
     */
    private  $path;

    /**
     * The domain for cookies.
     * @var string $domain
     * @access private
     */
    private $domain;

     /**
     * Flag indicating cookies should only be sent over secure connections.
     * @var boolean $issecure
     * @access private
     */
    private  $issecure;


    /**
     *Flag indicating cookies should not be available to client side scripts.
     * @var boolean $ishttponly
     * @access private
     */
    private $ishttponly;

    /**
     * Constructs a new CookieCache.
     * @param string $path The path cookies will be allowed under.
     * @param string $domain The domain for cookies.
     * @param boolean $issecure Flag indicating cookies should only be sent over secure connections.
     * @param boolean $ishttponly Flag indicating cookies should not be available to client side scripts.
     */
    public function __construct($path=null, $domain=null, $issecure=false, $ishttponly=false)
    {

        
        $this->path = $path;
        $this->domain  = $domain;
        $this->issecure = $issecure;
        $this->ishttponly = $ishttponly;

    }

    public function store($key, $value, $timer)
    {

        if(!setcookie($key, $value, $timer, $this->path, $this->domain, $this->issecure, $this->ishttponly))
                throw new CreateCookieException;

        return $this;

    }
}