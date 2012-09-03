<?php

namespace proof\php;


/**
 * timestamp Aug 10, 2012 7:34:59 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\php
 *
 *  Wrapper class for primitive single dimension arrays.
 * This class provides some of the more vital array functions into a single class.
 *
 */
class ArrayObject extends Object implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * An internal array of items
     * @var array $items
     * @access private
     */
    private $items = array ();

    /**
     * Constructs an ArrayObject with an optional array of items stored internally.
     * @param array $items    The optional items stored internally.
     */
    public function __construct(array $items = NULL)
    {

        $this->items = (array)$items;

    }

    public function offsetExists($offset)
    {

        return array_key_exists($offset, $this->items);

    }

    public function offsetGet($offset)
    {


        if ($this->offsetExists($offset))
            return $this->items[$offset];

    }

    public function offsetSet($offset, $value)
    {

        $this->items[$offset] = $value;

        return $this;

    }

    public function offsetUnset($offset)
    {

        if ($this->offsetExists($offset))
            unset($this->items[$offset]);

    }

    public function getIterator()
    {

        return new \ArrayIterator($this);

    }

    public function count()
    {
        return count($this->items);
    }

}