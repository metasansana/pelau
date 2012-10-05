<?php

namespace proof\sql;

/**
 * timestamp Oct 5, 2012 4:20:19 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Abstract class for common implementation amongst SQLCommand implementors.
 *
 */
use proof\util\ArrayList;

abstract class AbstractSQLCommand implements SQLCommand
{

    /**
     * A list of SQLEventListeners.
     * @var proof\util\ArrayList    $list
     * @access protected
     */
    protected $list;

    public function __construct()
    {

        $this->list = new ArrayList;

    }

    protected function fireStateChange(StateEvent $e)
    {
        foreach ($this->list as $l)
            $l->onStateChange($e);

    }

    protected function firePushEvent(PushEvent $e)
    {
        foreach ($this->list as $l)
            $l->onPush($e);

    }

    protected function fireFetchEvent(FetchEvent $e)
    {
        foreach ($this->list as $l)
            $l->onFetch($e);

    }

    public function addSQLEventListener(SQLEventListener $l)
    {

        $this->list->add($l);

        return $this;

    }
}