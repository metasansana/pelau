<?php

namespace pelau\util;


/**
 * timestamp Jul 18, 2012 10:01:52 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\util
 *
 *  Abstract implementor of the Collection interface. The method for adding new items is left up to child classes.
 *
 */
abstract class Collection extends Aggregate implements \IteratorAggregate, \ArrayAccess
{

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
        return @$this->items[$index];

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
        return new IteratorAdapter(new PHPIterator($this->items), $this->size());

    }

    public function toArray()
    {
        return $this->items;

    }

    public function offsetExists($offset)
    {
        return $this->indexAt($offset);

    }

    public function offsetGet($offset)
    {
        return $this->get($offset);

    }

    public function offsetUnset($offset)
    {

        $this->remove($offset);

    }

}