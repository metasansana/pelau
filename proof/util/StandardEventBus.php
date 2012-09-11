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
class StandardEventBus implements EventBus
{

    /**
     * List of handlers.
     * @var proof\util\ArrayList
     * @access protected
     */
    protected $handlers;

    public function __construct()
    {

        $this->handlers = new ArrayList;

    }

    public function addHandler(EventHandler $h)
    {
        $this->handlers->add($h);

    }

    public function put(Event $e)
    {

        //@todo once an event is handled we should stop broadcasting.
        foreach ($this->handlers as $h)
            $h->onEvent($e);

    }

}