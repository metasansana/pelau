<?php
namespace proof\net\http;

/**
 * timestamp Sep 9, 2012 6:46:09 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Interface for listening to Get events.
 *
 */
interface GetListener
{

     /**
     * Called when the request type is GET.
     * @param \proof\net\http\GetEvent $e
     */
    public function onGet(GetEvent $e);

}