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
interface HttpClient
{

    /**
     * Adds an HttpListener to this source
     * @param \pelau\net\http\HttpListener $l
     * @return \pelau\net\http\HttpClient
     */
    public function addListener(HttpListener $l);

    /**
     * Redirects the source to another url.
     * @param \pelau\net\http\FastLocation $l   The location to redirect to.
     * @param int $status   The status of the redirect.
     */
    public function redirect(HttpLocation $l, $status);

    /**
     * Returns a HttpRequest object.
     * @return \pelau\net\http\HttpRequest Object containing details about the current request.
     */
    public function getRequest();

    /**
     * Returns a HttpResponse object.
     * @return \pelau\net\http\HttpResponse Object for sending headers to the client.
     */
    public function getResponse();



}