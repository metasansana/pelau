<?php
namespace pealu\util;
/**
 * timestamp Oct 20, 2012 4:24:22 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pealu\util
 *
 *  Interface for filtering user input to an app.
 *
 */
interface Filter
{

    /**
     * Filter the specified target.
     * @param mixed $target
     * @return mixed    The filtered value input to the app.
     */
    public function on($target);

}