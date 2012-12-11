<?php
namespace proof\php;
/**
 * timestamp Jul 23, 2012 5:06:46 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\php
 *
 *  Class for simulating a String type.
 *  @todo Incomplete class
 *
 */
final class String extends Type
{

    /**
     * Constructs a new String object with a specified value.
     * <i>Note: This value is cast to a string.</i>
     * @param mixed $string
     */
    public function __construct($string="")
    {

        parent::__construct((string) $string);

    }

    /**
     * Removes whitespaces from both ends of this string.
     * @return proof\util\String
     */
    public function trim()
    {
        return new String(trim($this->value));
    }


    /**
     * Returns the position of the first found occurrence of a value in this String.
     * @param string $needle
     * @return int|boolean    The position the $needle was found (-1) or FALSE if it was not found.
     */
    public function indexOf($needle)
    {

        return strpos($this->value, "$needle");

    }

    /**
     * Determines if this String matches a regex.
     * @param String $regex
     * @return boolean
     */
    public function match($regex)
    {

        return preg_match($regex, $this->value);

    }

    /**
     * Returns the length of this String.
     * @return int
     */
    public function length()
    {
        return strlen($this->value);

    }

    /**
     * Creates a copy of this String with $string appended.
     * @param string $string
     * @return proof\php\String
     */
    public function append($string)
    {

        return new String("$this" . "$string");

    }

    /**
     * Creates a copy of this String with $string prepended.
     * @param string $string
     * @return proof\php\String
     */
    public function prepend($string)
    {
        return new String("$string" . "$this");

    }

    /**
     * Replaces a substring found in this String with a $replacement string.
     * @param string $target              The sub-string to be replaced.
     * @param string $replacement   The value to replace the sub-string with.
     * @param int $count=1                Optional: Number of times to do the replacement.
     * @return proof\php\String
     */
    public function replace($target, $replacement, $count = 1)
    {

        return new String(str_replace($target, $replacement, $this->value, $count));

    }

    /**
     * Returns a substring of this String
     * @param int $start
     * @param int $end
     * @return proof\php\String
     */
    public function cut($start, $end)
    {

        return new String(substr($this->value, $start, $end));

    }

    /**
     * Splits this string around a common marker into an array.
     * @param mixed $marker    The marker that will be used for spliting.
     * @return array    An array consiting of the split up string.
     */
    public function split($marker)
    {

        return $array = explode((string)$marker, $this->value);

    }

    /**
     * Returns an upper case representation of this String.
     * @return proof\php\String
     */
    public function toUpper()
    {

        return new String(strtoupper("$this"));

    }

    /**
     * Returns a lowercase representation of this String.
     * @return proof\php\String
     */
    public function toLower()
    {

        return new String(strtolower("$this"));

    }


}