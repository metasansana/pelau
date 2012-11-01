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
     * Search for the first occurence of a string in this string.
     * @param String $needle
     * @return int|boolean    The position the $needle was found (-1) or FALSE if it was not found.
     */
    public function indexOf(String $needle)
    {

        return strpos($this->value, "$needle");

    }

    /**
     * Returns true if this String mathces a regex.
     * @param String $regex
     * @return boolean
     * @throws proof\regex\RegexException
     */
    public function matches(String $regex)
    {

        $flag = preg_match("$regex", $this->value);

        if ($flag === FALSE)
            throw new proof\regex\RegexException;

        if (!$flag)
            return FALSE;

        if ($flag)
            return TRUE;

    }

    /**
     * Returns the length of this string.
     * @return int
     */
    public function length()
    {
        return strlen($this->value);

    }

    /**
     * Returns a copy of this string with $string appended to it.
     * @param String $string
     * @return String
     */
    public function append(String $string)
    {

        return new String("$this" . "$string");

    }

    /**
     * Returns a copy of this string with $string prepended to it.
     * @param String $string
     * @return String
     */
    public function prepend(String $string)
    {
        return new String("$string" . "$this");

    }

    /**
     * Returns a copy of this string with any occurences of $search replaced by $replace.
     * @param string $target              The sub-string to be replaced.
     * @param string $replacement   The value to replace the sub-string with.
     * @param int $count=1                Optional: Number of times to do the replacement.
     * @return String
     */
    public function replace($target, $replacement, $count = 1)
    {

        return new String(str_replace($target, $replacement, $this->value, $count));

    }

    /**
     * Returns a substring of this String
     * @param int $start
     * @param int $end
     * @return String
     */
    public function cut($start, $end)
    {

        return new String(substr($this->value, $start, $end));

    }

    /**
     * Splits this string around a common marker.
     * @param mixed $marker    The marker that will be used for spliting.
     * @return array    An array consiting of the split up string.
     */
    public function split($marker)
    {

        return $array = explode((string)$marker, $this->value);

    }


}