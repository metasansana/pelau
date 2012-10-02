<?php
namespace proof\sql;

/**
 * timestamp Sep 3, 2012 3:48:11 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 * Abstract class for the SQLCommand interface.
 *
 */
use proof\php\Object;
use proof\util\ArrayList;

abstract class SQLCommand extends Object
{
    /**
     * List of listeners awaiting changes in SQL state.
     * @var proof\util\ArrayList    $listeners
     * @access protected
     */
    protected $listeners;


    /**
     * Constructs a new SQLCommand object.
     */
    public function __construct()
    {
        $this->listeners = new ArrayList;
    }

    abstract public function pull(PullHandler $h);

    abstract public function push();

    protected function notify(array $info)
    {

        foreach($this->listeners as $l)
            $l->onChange(new SQLEvent($info, ));
    }



}