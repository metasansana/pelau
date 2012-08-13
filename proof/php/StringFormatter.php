<?php

namespace proof\php;


/**
 * timestamp Aug 13, 2012 9:12:31 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\php
 *
 * Class for formatting a string. String formatters store a copy of the strings they are created with
 * that changes on each format method call.
 *
 */
class StringFormatter extends Object
{

    /**
     * The String value of this formatter
     * @var proof\php\String $string
     * @access private
     */
    private $string;

    /**
     * Construct a new formatter with a string value.
     * @param String $string
     */
    public function __construct(String $string)
    {

        $this->string = $string;

    }


    public function toUpperCase()
    {

        $this->string = new String(strtoupper($this->string));

    }

    public function toLowerCase()
    {

        $this->string =  new String(strtolower($this->string));

    }

    public function getString()
    {
        return $this->string;
    }

    public function __toString()
    {
        return (string)$this->getString();
    }

}