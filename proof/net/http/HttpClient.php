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
interface HttpClient extends HttpClient
{

    /**
     * Returns an object capable of sending headers.
     * @param int $status = null    The status code the response will be created with.
     * @return proof\net\http\HttpResponse    The object capable of sending headers.
     */
    public function getResponse($status=null);

    /**
     * Returns any cookies this client sent.
     * @return proof\util\Map    A Map containing the cookies.
     */
    public function getCookies();
    
    /**
     * Attempts to return the user agent string.
     * @return string | null
     */
    public function getUA();




}