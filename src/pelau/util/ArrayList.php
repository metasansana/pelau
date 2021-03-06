<?php
namespace pelau\util;
/**
 * timestamp Jul 22, 2012 7:10:25 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\util
 *
 * Container for  storing items in sequence
 *
 */
class ArrayList extends Collection implements Sequence
{


    /**
     * Adds an item to this Collection
     * @param int $item
     * @return \pelau\util\AbstractListing
     */
    public function add($item)
    {

        $this->items[] = $item;
        return $this;

    }

    /**
     * Removes the item specified by $index. Note that the numeric keys are recalculated.
     * @param mixed $index    The index to remove.
     * @return pelau\util\ArrayList
     */
    public function remove($index)
    {

        $flag = parent::remove($index);

        $this->items = array_values($this->items);

        return $this;

    }

    public function offsetSet($offset, $value)
    {
        throw \pelau\php\UnsupprotedOperationException;
    }


}