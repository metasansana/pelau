<?php

namespace pelau\util;

/**
 * timestamp Oct 14, 2012 4:44:24 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\util
 *
 *  Abstract  class representing an aggregation of values.
 *
 */
abstract class Aggregate extends \pelau\php\Object
{

    /**
     * The items that are part of this Aggregate.
     * @var array $items
     * @access protected
     */
    protected $items = array();

    /**
     * Constructs a new Aggregate class.
     * @param array $items    Optional members of this Aggregate.
     */
    public function __construct(array $items = array ())
    {

        $this->items = $items;

    }

    /**
     * Returns the number of items in this Aggregate
     * @return int    The number of items.
     */
    public function size()
    {

        return count($this->items);

    }

    /**
     * Removes all members of this Aggregate.
     * @return \pelau\util\Aggregate
     */
      public function clear()
    {

        $this->items = array ();
        return $this;

    }

    /**
     * Test for emptiness.
     *  @return boolean    TRUE if empty, FALSE otherwise.
     */
    public function isEmpty()
    {

        return empty($this->items);

    }

}