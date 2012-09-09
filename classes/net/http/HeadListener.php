<?php
namespace proof\net\http;

/**
 * timestamp Sep 9, 2012 6:55:39 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Interface for listening to HEAD events.
 *
 */
interface HeadListener
{

    /**
     * Called when the request is HEAD.
     * @param \proof\net\http\HeadEvent $e
     */
    public function onHead(HeadEvent $e);

}