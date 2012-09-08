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

class Event extends Object
{

    /**
     * The source object of this event
     * @var proof\php\Object $src
     * @access protected
     */
    private $src;

}