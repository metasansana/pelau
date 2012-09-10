<?php
namespace proof\net\http;
/**
 * timestamp Sep 9, 2012 6:55:26 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Interface for listening to POST events.
 *
 */
interface PostListener
{

    /**
     * Called when the request type is POST
     * @param \proof\net\http\PostEvent $e
     */
    public function onPost(PostEvent $e);

}