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
abstract class HttpListener
{


    /**
     * Method called when a GET event occurs.
     * @param \pelau\net\http\Browser $client
     * @param \pelau\net\http\GetEvent $evt
     */
    public function onGet(Browser $client, GetEvent $evt)
    {

    }

    /**
     * Method called when a POST event occurs.
     * @param \pelau\net\http\Browser $client
     * @param \pelau\net\http\PostEvent $evt
     */
    public function onPost(Browser $client, PostEvent $evt)
    {

    }

}