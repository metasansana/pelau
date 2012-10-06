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

class SQLEventProxy
{

    /**
     * A list of SQLEventListeners.
     * @var proof\util\ArrayList    $list
     * @access protected
     */
    private $list;

    /**
     *The SQLCommand that will be the source of events.
     * @var proof\sql\SQLCommand
     * @access private
     */
    private $source;

    public function __construct(SQLCommand $source)
    {

        $this->list = new ArrayList;
        $this->source = $source;

    }

    public function  fireStateEvent(StateEvent $e)
    {

        if (!$this->list->isEmpty())
            foreach ($this->list as $l)
                $l->onStateChange($e);

    }

    public function addSQLEventListener(SQLEventListener $l)
    {

        $this->list->add($l);
        
        return $this;

    }

}