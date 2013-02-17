<?php

/**
 *
 * timestamp: Dec 25, 2012 10:10:01 PM
 * encoding: UTF-8
 *
 * Copyright 2012  Lasana Murray <dev@trinistorm.org>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package pelau\php
 *
 * Wrapper class for manipulating strings.
 *
 *
 */

namespace pelau\php;


final class String extends Type
{

    /**
     * Constructs a new String object with an optional value.
     */
    public function __construct($value = null)
    {

        parent::__construct((string) $value);

    }

    /**
     * Search for the first occurence of a string in this string.
     * @param string $needle
     * @return int|boolean    The position the $needle was found (-1) or FALSE if it was not found.
     */
    public function indexOf($needle)
    {

        return strpos($this->value, (string) $needle);

    }

    /**
     * Returns true if this String mathces the supplied pattern.
     * @param string $pattern
     * @return boolean
     */
    public function matches($pattern)
    {

        $flag = preg_match($pattern, $this->value);

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
     * @param mixed $string
     * @return pelau\php\String   A new String class consisting of this and the appended value.
     */
    public function append($string)
    {

        return new String("$this" . "$string");

    }

    /**
     * Returns a copy of this string with $string prepended to it.
     * @param mixed $string
     * @return pelau\php\String    A new String class consisting of this and the prepended value.
     */
    public function prepend($string)
    {
        return new String("$string" . "$this");

    }

    /**
     * Returns a copy of this string with any occurences of $search replaced by $replace.
     * @param string $target              The sub-string to be replaced.
     * @param string $replacement   The value to replace the sub-string with.
     * @param int $count=null                Optional: Number of times to do the replacement.
     * @return pelau\php\String
     */
    public function replace($target, $replacement, $count = null)
    {

        return new String(str_replace($target, $replacement, $this->value, $count));

    }

    /**
     * Returns a substring of this String
     * @param int $start
     * @param int $end
     * @return pelau\php\String
     */
    public function cut($start, $end)
    {

        return new String(substr($this->value, $start, $end));

    }

    /**
     * Splits this string around a common marker.
     * @param mixed $marker    The marker that will be used for spliting.
     * @return array An array containing the split members of the string.
     */
    public function split($marker)
    {

        return explode((string) $marker, $this->value);

    }

    /**
     * Returns an upper case representation of this String.
     * @return pelau\php\String
     */
    public function toUpper()
    {

        return new String(strtoupper("$this"));

    }

    /**
     * Returns a lowercase representation of this String.
     * @return pelau\php\String
     */
    public function toLower()
    {

        return new String(strtolower("$this"));

    }

    public function trim()
    {
        return new String(trim("$this"));
    }

    /**
     * Converts this string to a Character array.
     * @return array    An array containing the characters of this string.
     */
    public function toArray()
    {

        return str_split($this);

    }

}