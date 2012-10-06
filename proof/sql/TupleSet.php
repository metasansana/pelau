<?php
namespace proof\sql;
/**
 * timestamp Oct 6, 2012 1:37:46 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Interface for classes that receive query results tuple by tuple.
 *
 */
interface TupleSet
{

    /**
     * Each call to this method adds a row to the set.
     * @param \proof\sql\Map $row
     */
    public function addTupple(Map $row);

}