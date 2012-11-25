<?php
namespace proof\php;
/**
 * timestamp Sep 11, 2012 5:13:06 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\php
 *
 *  Interface for objects that can be converted into a string.
 *
 */
interface Stringable
{

    /**
     * Returns a string provided by this object.
     * @return proof\util\String    A string provided by this object.
     */
    public function __toString();

}