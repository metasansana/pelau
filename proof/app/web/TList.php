<?php

namespace proof\app\web;

/**
 * timestamp Oct 20, 2012 5:23:53 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\app\web
 *
 *  Class used in the inclusion of template files. This class is essentially a wrapped array list.
 *
 */
use proof\util\ArrayList;

class TList implements \IteratorAggregate
{

    /**
     * The directory templates will be included from.
     * @var string $dir
     * @access private
     */
    private $dir;

    /**
     * A list of templates.
     * @var proof\util\ArrayList    $list
     * @access private
     */
    private $list;

    /**
     * Constructs a new TList.
     * @param string $dir
     */
    public function __construct($dir)
    {

        $this->dir = $dir;
        $this->list = new ArrayList;

    }

    public function addTemplate($path)
    {
        $this->list->add($path);
        return $this;

    }

    public function clear()
    {
        $this->list->clear();

    }

    public function getIterator()
    {
        return $this->list->getIterator();

    }

}