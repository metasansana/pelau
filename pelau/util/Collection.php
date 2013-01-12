<?php
namespace pelau\util;
/**
 * timestamp Jul 17, 2012 10:30:51 PM
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 *
 * The Colleciton interface provides methods for manipulating the data a class aggregates.
 *
 */
interface Collection extends Aggregate, \IteratorAggregate
{

    /**
     * Returns the item stored at index if it exists.
     * @param mixed $index    The index of the item desired.
     * @return mixed|NULL    The item desired or NULL if none exists.
     */
    public function get($index);

    /**
     * Checks if $index exists.
     * @param mixed $index    The index of to find.
     * @return boolean    TRUE if the index exists, FALSE otherwise.
     */
    public function indexAt($index);

    /**
     * Checks if an item exists at $index.
     * @param mixed $index    The index of the item desired
     * @return boolean    TRUE if an item at $index exists, FALSE otherwise.
     */
    public function itemAt($index);

    /**
     * Removes the item specified by $index.
     * @param mixed $index    The index to remove.
     * @return boolean    TRUE if successful, FALSE otherwise.
     */
    public function remove($index);

    /**
     * Returns an array representation of this Collection.
     * @return array
     */
    public function toArray();

    /**
     * Removes all items.
     */
    public function clear();



}
