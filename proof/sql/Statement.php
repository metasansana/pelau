<?php

namespace proof\sql;

/**
 * timestamp Aug 4, 2012 8:35:08 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Parent class of sql Statement classes. The Statement family only represents a generic
 *  sql statement which can be INSERT,DELETE, SELECT, UPDATE or vendor specific commands.
 *
 */
use proof\php\String;

abstract class Statement implements Fetchable, Pushable
{

    /**
     * Object listening for state changes.
     * @var proof\sql\SQLStateListener
     * @access protected.
     */
    protected $listener;

   /**
     * Alerts the SQLStateListener (if any) of a change in SQL state.
     * @param \proof\sql\SQLState $state
     * @return boolean
     */
    protected function changeState(SQLState $state)
    {

        if ($this->listener)
        {
            $this->listener->onChange($state);
            return true;
        }
        else
        {
            return false;
        }

    }

    /**
     * Attaches an SQLStateListener
     * @param \proof\sql\SQLStateListener $l
     * @return \proof\sql\Statement
     */
    public function attachStateListener(SQLStateListener $l)
    {
        $this->listener = $l;
        return $this;

    }

}