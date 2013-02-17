<?php

namespace pelau\util;


/**
 * timestamp Jul 25, 2012 11:45:17 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\util
 *
 *  Implementation of a Stack.
 *
 */
class Stack extends Aggregate
{



    /**
     * Pushes an item on to the stack.
     * @param mixed $item
     */
    public function push($item)
    {

        array_push($this->items, $item);

    }

    public function pop()
    {

        return array_pop($this->items);
    }

    public function peek()
    {

        $item = $this->pop();

        $this->push($item);

        return $item;
    }


}