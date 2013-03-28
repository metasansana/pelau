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
 *  Class representing a data structure for storing key value pairs.
 *
 */
abstract class Collection extends Aggregate implements \IteratorAggregate
{

    /**
     *  Checks the Collection for the specified key.
     * @param mixed $key
     * @return boolean
     */
    public function hasKey($key)
    {

        return array_key_exists($key, $this->items);

    }

    /**
     * Returns the value of a key if it exists.
     * @param mixed $key
     * @return mixed|null
     */
    public function get($key)
    {

        if ($this->hasKey($key))
            return $this->items[$key];

    }

    /**
     * Deletes a key and its value from the Collection.
     * @param mixed $key
     * @return \pelau\util\Collection
     */
    public function remove($key)
    {

        if ($this->hasKey($key))
            unset($this->items[$key]);

        return $this;

    }

    public function getIterator()
    {

        return new IteratorAdapter(new PHPIterator($this->items), $this->size());

    }

    /**
     * Returns the members of this collection as an array.
     * @return array
     */
    public function toArray()
    {

        $return = $this->items; //Copy the array

        return $return;

    }

}