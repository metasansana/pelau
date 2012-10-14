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
class Stack implements Aggregate
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

        if ($this->isEmpty())
            throw new StackEmptyException;

        return array_pop($this->items);

    }

    public function isEmpty()
    {
        return empty($this->stack);

    }

    public function size()
    {
        return count($this->stack);

    }

}