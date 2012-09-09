<?php
namespace proof\php;

/**
 * timestamp Aug 22, 2012 5:10:52 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\php
 *
 *  Root class of all proof classes.
 *
 */
class Object
{


    public function getClassName()
    {
        return get_class($this);
    }

    public function __toString()
    {
        return $this->getClassName();
    }

}