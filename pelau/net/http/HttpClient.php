<?php
namespace pelau\net\http;
/**
 * timestamp Nov 1, 2012 4:57:41 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\net\http
 *
 * Interface for objects that can actually generate HTTP events.
 *
 */
interface HttpClient
{

    /**
     * Adds an HttpListener to this source
     * @param \pelau\net\http\HttpListener $l
     * @return \pelau\net\http\HttpSource
     */
    public function addListener(HttpListener $l);

}