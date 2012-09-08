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
interface EventBus
{

    /**
     * Adds an EventHandler to the bus.
     * @param \proof\util\EventHandler $h
     */
    public function addHandler(EventHandler $h);

    /**
     * Broadcasts an event to all handlers.
     * @param \proof\util\Event $e
     */
    public function pushEvent(Event $e);

}