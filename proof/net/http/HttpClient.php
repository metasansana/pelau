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
 * Interface for objects that can actually generate HTTP events.
 *
 */
interface HttpClient
{

    /**
     * Adds an HttpListener to this source
     * @param \proof\net\http\HttpListener $l
     * @return \proof\net\http\HttpSource
     */
    public function addListener(HttpListener $l);

}