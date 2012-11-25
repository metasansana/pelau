<?php
namespace proof\util;
/**
 * timestamp Oct 14, 2012 9:53:33 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util
 *
 * @todo: Unit tests
 *
 *  Simple Iterator for arrays.
 *
 */
class ArrayIterator implements Iterator
{

    /**
     * The array that will be iterated.
     * @var array $array
     * @access private
     */
    private $array;

    /**
     * The size of the array
     * @var int size
     * @access private
     */
    private $size;

    /**
     * The internal pointer
     * @var int ptr
     * @access private
     */
    private $ptr = 0;

    /**
     * Constructs a new ArrayIterator
     * @param array $array   The array to iterator
     */
    public function __construct(array $array)
    {
        $this->array = $array;
        $this->size = count($array);
    }


    public function hasNext()
    {

        if($this->ptr < $this->size)
            return TRUE;

    }

    public function next()
    {

        $ptr = $this->ptr+1;

        $next = $this->array[$ptr];

        $this->ptr++;

        return $next;

    }
}