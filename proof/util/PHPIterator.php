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
     *
     * @var int $pos
     * @access private
     */
    private $pos = 0;

    /**
     * The array that will be iterated over.
     * @var array $list
     * @access private
     */
    private $list;

    public function __construct(array $list = array())
    {
        $this->list = $list;
    }

    public function current()
    {
        return current($this->list);
    }

    public function key()
    {
        return key($this->pos);
    }

    public function next()
    {
        return next($this->list);
    }

    public function rewind()
    {
        reset($this->list);
    }

    public function valid()
    {
        array_key_exists($this->current(), $this->list);
    }
}