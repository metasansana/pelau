<?php
namespace proof\util;
/**
 * timestamp Jul 18, 2012 12:55:04 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util;
 *
 *  Interface for classes that represent an aggregration of objects or primitives.
 *
 */
interface Aggregate
{


   /**
     * Test this Aggregate for emptiness.
     *  @return boolean    TRUE if empty, FALSE otherwise.
     */
    public function isEmpty();


    /**
     * Returns the number of items in this Aggregate
     * @return int    The number of items.
     */
    public function size();






}