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
 *  Extend this class to write an HttpListener, overwrite only the methods needed.
 *
 */
abstract class AbstractHttpListener implements HttpListener
{


    public function onGet(GetEvent $e)
    {

    }

    public function onPost(PostEvent $e)
    {

    }

}