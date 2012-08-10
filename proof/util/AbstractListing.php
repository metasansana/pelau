<?php
namespace proof\util;
/**
 * timestamp Jul 22, 2012 6:25:51 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util
 *
 *
 */
abstract class AbstractListing extends AbstractAggregate implements Listing
{

    protected function checkIndex($index)
    {

        if(!is_integer($index))
            throw new InvalidIndexException;

    }

    /**
     * Adds an item to this Listing
     * @param int $item
     * @return \proof\util\AbstractListing
     */
    public function add($item)
    {

        $this->items[] = $item;
        return $this;

    }

    public function getIterator()
    {

        return new ListIterator($this);

    }
}