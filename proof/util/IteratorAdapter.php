<?php
namespace proof\util;
/**
 * timestamp Jul 22, 2012 7:29:52 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util
 *
 * Adpater class that wraps the PHP SPL iterator into the proof iterator.
 *
 */
class IteratorAdapter implements \Iterator, Iterator
{

    /**
     * The iteratable items
     * @var Listing $items
     * @access private
     */
    private $i;

    /**
     * Pointer to the items
     * @var int $ptr
     * @access private
     */
    private $ptr = 0;

    /**
     * The size of the iteratable item.
     * @var int $size
     * @access private
     */
    private $size;


    /**
     * Constructs a new Iterator.
     * @param \proof\util\Iterator $i    The Iterator that will be adapted.
     * @param int $size   The size of the items being iterated.<b>It is important that this is accurate!</b>
     */
    public function __construct(\Iterator $i, $size)
    {

        $this->i = $i;
        $this->size = $size;

    }

    public function current()
    {
        return $this->i->current();
    }

    public function key()
    {

        return $this->i->key();

    }

    public function next()
    {

        $this->ptr++;

        return $this->i->next();
       
    }

    public function rewind()
    {

        $this->i->rewind();

        $this->ptr = 0;

    }

    public function valid()
    {

       return $this->i->valid();

    }

    public function hasNext()
    {

        if($this->ptr < $this->size)
            return TRUE;

        return FALSE;

    }

}