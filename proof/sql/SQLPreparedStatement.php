<?php

namespace proof\sql;

/**
 * timestamp Oct 3, 2012 5:43:07 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Interface for sql PreparedStatement classes.
 * @todo : In future-> bind($value, $datatype), bindName($name, $value, $datatype)?
 *
 */
interface SQLPreparedStatement
{

    /**
     * Bind a value to the next '?' placeholder.
     * @param mixed $value    The value to be bound.
     */
    public function bind($value);

    /**
     *  Bind a value to a named placeholder.
     * @param mixed $name    The placeholder name.
     * @param mixed $value     The value to be bound.
     */
    public function bindName($name, $value);

}