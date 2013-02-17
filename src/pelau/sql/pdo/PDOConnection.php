<?php

namespace pelau\sql\pdo;

/**
 * timestamp Nov 10, 2012 5:16:27 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql\pdo
 *
 *  Class represnting a sql connection via PDO.
 *
 */
use pelau\sql\SQLConnection;

class PDOConnection implements SQLConnection
{

    /**
     * Mode of the connection.
     * @var pelau\sql\PDOState $state
     * @access private
     */
    private $state;

    public function __construct(\PDO $pdo)
    {

        $this->state = new ActiveState($pdo);

    }

    public function create($sql)
    {

        return $this->state->create($sql);

    }

    public function prepare($sql)
    {

        return $this->state->prepare($sql);

    }


    public function getTransaction()
    {
        return $this->state->getTransaction();
    }

}