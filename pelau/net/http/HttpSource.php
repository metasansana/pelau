<?php
namespace pelau\net\http;
/**
 * timestamp Nov 8, 2012 5:19:38 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\net\http
 *
 * Interface of object that represent an http client.
 *
 */
interface HttpSource
{


    /**
     * Redirects the source to another url.
     * @param string $location    The location to redirect to.
     * @param int $timer=null      Optional: Time the source should wait before rediredting.
     */
    public function redirect($location, $timer=null);

    /**
     * Returns any cookies this client sent.
     * @return pelau\util\Map    A Map containing the cookies.
     */
    public function getCookies();

    /**
     * Returns the remote address for the HTTP source.
     * @return string The address of the remote source in string form.
     */
    public function getRemoteAddress();

    /**
     * Returns the sources UA string if one is supplied.
     * @return string | null
     */
    public function getUAString();


}