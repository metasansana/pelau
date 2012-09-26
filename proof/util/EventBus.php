<?php
namespace proof\util;


/**
 * timestamp Sep 8, 2012 3:12:32 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof/util
 *
 *
 */
class EventBus implements EventBus
{

    /**
     * List of event handlers subscribed to the bus.
     * @var proof\util\ArrayList
     * @access protected
     */
    protected $handlers;

    public function __construct()
    {

        $this->handlers = new ArrayList;

    }

    public function subscribe(EventHandler $h)
    {
        $this->handlers->add($h);

    }

    public function broadcast(Event $e)
    {

        //@todo once an event is handled we should stop broadcasting.
        foreach ($this->handlers as $h)
            $h->onEvent($e);

    }

}