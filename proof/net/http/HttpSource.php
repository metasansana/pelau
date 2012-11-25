<?php
namespace proof\net\http;
/**
 * timestamp Nov 8, 2012 5:19:38 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 * Interface representing the source of incomming http requests.
 *
 */
interface HttpClient
{

    /**
     * Adds an HttpListener to this source
     * @param \proof\net\http\HttpListener $l
     * @return \proof\net\http\HttpClient
     */
    public function addListener(HttpListener $l);

}