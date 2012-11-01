<?php
namespace proof\net\http;
/**
 * timestamp Sep 9, 2012 6:59:57 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Extend this class to write HttpListeners by overwriting the desired methods.
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