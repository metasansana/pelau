<?php
namespace pelau\sql;
/**
 * timestamp Nov 10, 2012 6:40:46 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql
 *
 * Interface representing a PreparedStatement with an SQL database.
 *
 */
interface PreparedStatement extends Statement
{

    /**
     * Binds a string value to the statement.
     * @param mixed $index
     * @param string $string
     */
    public function bindString($index, $string);

    /**
     * Binds an integer value to the statement.
     * @param mixed $index
     * @param int $int
     */
    public function bindInteger($index, $int);

    /**
     *  Binds a boolean value to the statement.
     * @param mixed $index
     * @param boolean $bool
     */
    public function bindBoolean($index, $bool);

    /**
     * Binds a floating point value to the statement
     * @param mixed $index
     * @param float $float
     */
    public function bindFloat($index, $float);

}