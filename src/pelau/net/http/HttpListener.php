<?php
namespace pelau\net\http;
/**
 * timestamp Sep 9, 2012 6:59:57 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\net\http
 *
 *  Abstract class for easier HttpListener implementation.
 *
 *  Abstract class for listening for HTTP events.
 *
 */
interface HttpListener
{


    /**
     * Method called when a GET event occurs.
     * @param \pelau\net\http\Response $res
     * @param \pelau\net\http\Request $req
     */
    public function onGet(Response $res, Request $req);


    /**
     * Method called when a POST event occurs.
     * @param \pelau\net\http\Response $client
     * @param \pelau\net\http\Request $evt
     */
    public function onPost(Response $res, Request $req);


}