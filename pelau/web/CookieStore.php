<?php
namespace pelau\web;
/**
 * timestamp Nov 6, 2012 4:12:15 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\web
 *
 *  Interface for storing client side cookies.
 *
 */
interface CookieStore
{

    /**
     * Stores a cookie in a client's cache.
     * @param string $key    The key name.
     * @param mixed $value The value of the key.
     * @param int $timer        The ttl of the cookie.
     * @return pelau\web\CookieStore
     */
    public function store($key, $value, $timer);

}