<?php

namespace proof\app;


/**
 * timestamp Sep 8, 2012 3:12:32 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof/app
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

    public function pushEvent(Event $e)
    {

        foreach ($this->handlers as $h)
            $h->onEvent($e);

    }

}