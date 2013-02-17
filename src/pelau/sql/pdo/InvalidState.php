<?php

namespace pelau\sql\pdo;

/**
 * timestamp Nov 10, 2012 5:31:06 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql\pdo
 *
 *  Represents a closed PDO connection.
 *
 */
use pelau\php\UnsupportedOperationException;

class InvalidState implements PDOState
{

    public function create($sql)
    {

        throw new UnsupportedOperationException;

    }

    public function prepare($sql)
    {

        throw new UnsupportedOperationException;

    }

    public function getTransaction()
    {

        throw new UnsupportedOperationException;

    }


}