<?php

namespace proof\util;


/**
 * timestamp Jul 18, 2012 10:01:52 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util
 *
 *  Abstract implementor of the Collection interface. The method for adding new items is left up to child classes.
 *
 */
class AbstractCollection extends AbstractAggregate implements Collection
{

    /**
     * The items that are part of this Aggregate.
     * @var array $items
     * @access protected
     */
    protected $items;

    /**
     * Constructs a new Collection with optional members $items.
     * @param array $items    The optional members.
     */
    public function __construct(array $items = array ())
    {

        $this->items = $items;

    }

    public function indexAt($index)
    {

        return array_key_exists($index, $this->items);

    }

    public function itemAt($index)
    {

        return isset($this->items[$index]);

    }

    public function get($index)
    {
        return $this->items[$index];

    }

    public function remove($index)
    {

        if ($this->indexAt($index))
        {
            unset($this->items[$index]);
            return TRUE;
        }
        else
        {
            return FALSE;
        }

    }

    public function clear()
    {

        $this->items = array ();
        return $this;

    }

    public function getIterator()
    {
        return new IteratorAdapter(new \ArrayIterator($this->items), $this->size());

    }

}