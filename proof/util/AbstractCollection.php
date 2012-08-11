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
 *  Abstract implementor of the Collection interface for making implementation easier in other clases.
 *
 */
abstract class AbstractCollection extends AbstractAggregate implements Collection
{

    /**
     * Check that the index is a string or char type.
     * @param mixed $index
     * @throws InvalidIndexException
     */
    protected function checkIndex($index)
    {
        if (!is_string($index))
            throw new InvalidIndexException;

    }

    /**
     * Adds an item to this Collection
     * @param string $index
     * @param mixed $item
     * @return \proof\util\AbstractCollection
     *
     */
    public function add($index, $item)
    {

        $this->checkIndex($index);

        $this->items[$index] = $item;

        return $this;

    }

    public function getIterator()
    {
        return new \ArrayIterator($this->toArray());

    }

}