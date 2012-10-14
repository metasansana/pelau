<?php

namespace proof\util;


/**
 * timestamp Jul 25, 2012 11:45:17 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util
 *
 *  Implementation of a Stack.
 *
 */
class Stack extends AbstractAggregate
{

    private $stack = array ();

    /**
     * Pushes an item on to the stack.
     * @param mixed $item
     */
    public function push($item)
    {

        array_push($this->s, $item);

    }

    public function pop()
    {

        return array_pop($this->items);
    }


}