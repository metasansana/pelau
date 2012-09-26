<?php
namespace proof\util;
/**
 * timestamp Sep 8, 2012 3:24:55 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util
 *
 *  Interface for fowarding events.
 *
 */
interface Broadcaster
{

    /**
     * Adds an EventHandler to the bus.
     * @param \proof\util\EventHandler $h
     */
    public function subscribe(EventHandler $h);

    /**
     * Puts up an event to be broadcasted.
     * @param \proof\util\Event $e
     */
    public function broadcast(Event $e);

}