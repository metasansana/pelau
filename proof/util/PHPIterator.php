<?php

namespace proof\util;


/**
 * timestamp Oct 14, 2012 11:29:59 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util
 *
 * Implementation of the PHP iterator for arrays.
 *
 */
class PHPIterator implements \Iterator
{

    /**
     * Indicates if all items have been iterated.
     * @var boolean $flag
     * @access private
     */
    private $flag = FALSE;

    /**
     * Keeps track of the number of iterations.
     * @var int $count
     * @access private
     */
    private $ptr = 0;

    /**
     * The array that will be iterated over.
     * @var array $list
     * @access private
     */
    private $list;

    public function __construct(array $list = array ())
    {

        $this->list = array_values($list);

    }

    /**
     * Checks if the list has been iterated beyond its size.
     */
    private function _isBeyond()
    {

        if($this->ptr >= count($this->list))
            return TRUE;

        return FALSE;

    }

    public function current()
    {

        return current($this->list);

    }

    public function key()
    {

        return key($this->list);

     }

    public function next()
    {

        $this->ptr++;
        return  next($this->list);

   }

    public function rewind()
    {

        reset($this->list);
        $this->ptr = 0;

    }

    public function valid()
    {

        if(empty($this->list))
            return FALSE;

        if ($this->_isBeyond())
            return FALSE;

        return TRUE;

    }

}