<?php
namespace proof\util;
/**
 * timestamp Sep 7, 2012 11:30:48 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\util
 *
 *  Parent class of all events. Event classes provide a way to route messages internally between the
 *  classes in an application
 *
 */
use proof\php\Object;
use proof\php\String;

class Event extends Object
{

    /**
     * The source object of this event
     * @var proof\php\Object $source
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
     * @return proof\php\Object
     */
    public function getSource()
    {
        return $this->source;
    }


    public function getMessage()
    {
        $type = $this->getClassName();
        return new String("$type occured.");
    }



}