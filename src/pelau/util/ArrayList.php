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
class ArrayList extends Collection
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

    public function remove($key)
    {

        parent::remove($key);

        $this->items = array_values($this->items);

        return $this;

    }

}