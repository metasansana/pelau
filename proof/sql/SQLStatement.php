<?php

namespace proof\sql;
/**
 * timestamp Oct 3, 2012 5:24:33 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  Interface for sql Statement classes.
 *
 */
interface SQLStatement extends SQLCommand
{

    /**
     * Escapes dangerous characters in a string based on the current database charset.
     * @param mixed $unsafe    The untrusted string.
     * @return mixed    The sanitized untrusted string.
     */
    public function escape($unsafe);

}