<?php
namespace proof\net\http;
/**
 * timestamp Sep 9, 2012 7:38:03 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\net\http
 *
 *  Interface for listening to PUT events.
 *
 */
interface PutListener
{

    /**
     * Called when the request type is PUT.
     * @param \proof\net\http\PutEvent $e
     */
    public function onPut(PutEvent $e);


}