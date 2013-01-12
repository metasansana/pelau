<?php
namespace pelau\util;
/**
 * timestamp Sep 7, 2012 11:30:48 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\util
 *
 *  Parent class of all events. Event classes provide a way to route messages internally between the
 *  classes in an application
 *
 */
use pelau\php\Object;
use pelau\php\String;

abstract class Event extends Object
{

    /**
     * The source object of this event
     * @var pelau\php\Object $source
     * @access protected
     */
    protected $source;

    /**
     * Constructs a new Event object.
     * @param Object $source
     */
    public function __construct(Object $source)
    {


        $this->source = $source;


    }

    /**
     * Returns the object that is the source of this event.
     * @return pelau\php\Object
     */
    public function getSource()
    {
        return $this->source;
    }

}