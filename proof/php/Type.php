<?php
namespace proof\php;


/**
 * timestamp Jul 23, 2012 5:08:47 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\types
 *
 * The Type class is the parent class of all classes that wrap the primitive types of php.
 *
 *
 */
class Type
{

    /**
     * The current value of this type
     * @var mixed $value
     * @access protected
     */
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;

    }

    public function __toString()
    {
        return (string)$this->value;

    }

}
