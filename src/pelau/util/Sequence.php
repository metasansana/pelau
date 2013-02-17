<?php
namespace pelau\util;
/**
 * timestamp Nov 10, 2012 10:19:00 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\util
 *
 *  Interface for creating a collection of items in a particular order.
 *
 */
interface Sequence
{

    /**
     *  Add an item to this sequence.
     * @param mixed $item
     */
    public function add($item);

}