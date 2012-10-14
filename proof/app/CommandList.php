<?php
namespace proof\app\web;
/**
 * timestamp Oct 14, 2012 9:39:15 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\web\app
 * @todo: The implementation of Iterator could be  cleaner. Perhaps an internal iterator instead of an ArrayList?
 *
 *  Class for turning a url request into a set of commands (using a clean path).
 *
 *
 */
use proof\php\String;
use proof\util\ArrayList;
use proof\util\Iterator;

class CommandList implements Iterator
{

    /**
     *
     * @var proof
     * @access
     */
    private $list;

    public function __construct(String $url)
    {

        $array = $url->split("/");    //@todo: Should split return an ArrayObject? You can then shift from there.
        array_shift($array);          //This class could become a generic command list class, leavi
        $this->list = new ArrayList($array);
    }

    public function hasNext()
    {

    }

    public function next()
    {

    }

    public function
}