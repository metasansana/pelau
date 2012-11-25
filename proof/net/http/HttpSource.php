<?php
namespace proof\net\http;
/**
 * timestamp Nov 1, 2012 4:57:41 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 * Interface for the source of http events.
 *
 */
interface HttpSource
{


    /**
     * Adds an HttpListener to this source
     * @param \proof\net\http\HttpListener $l
     * @return \proof\net\http\HttpSource
     */
    public function addListener(HttpListener $l);

    /**
     * Sends a redirect request to the source.
     * @param string $location
     *
     */
    public function redirect($location);

}