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
     * Binds a value when using unamed placeholders.
     * @param mixed $value    The value to be bound to the prepared statement.
     */
    public function bind($value);

    /**
     * Binds a named value when using named placeholders.
     * @param mixed $name     The name of the value to be bound.
     * @param mixed $value    The value to be bound to the prepared statement.
     */
    public function bindName($name, $value);

}