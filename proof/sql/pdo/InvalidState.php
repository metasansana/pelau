<?php

namespace proof\sql\pdo;

/**
 * timestamp Nov 10, 2012 5:31:06 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql\pdo
 *
 *  Represents a closed PDO connection.
 *
 */
use proof\php\UnsupportedOperationException;

class InValidState implements PDOState
{

    private function _respond()
    {

        throw new UnsupportedOperationException
        ("Connection cannot be used, Transaction might be active.");

    }

    public function create($sql)
    {
        $this->_respond();

    }

    public function prepare($sql)
    {

        $this->_respond();

    }

    public function begin()
    {
        $this->_respond();
    }

    public function close()
    {

        $this->_respond();

    }

}