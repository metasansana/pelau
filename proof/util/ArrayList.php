<?php
namespace proof\util;
/**
 * timestamp Jul 22, 2012 7:10:25 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util
 *
 * Container for  storing items in sequence
 *
 */
class ArrayList extends AbstractCollection
{


    /**
     * Adds an item to this Collection
     * @param int $item
     * @return \proof\util\AbstractListing
     */
    public function add($item)
    {

        $this->items[] = $item;
        return $this;

    }


}