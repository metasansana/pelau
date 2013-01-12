<?php
namespace pelau\util;
/**
 * timestamp Oct 6, 2012 12:10:10 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql
 *
 *  Simple implemention of the iterator pattern.
 *
 */
interface Iterator
{


    /**
     * Queries whether another item exists or not.
     * @return boolean
     */
    public function hasNext();

    /**
     * Returns the next item.
     * @return mixed
     */
    public function next();

}