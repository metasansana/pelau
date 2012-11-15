<?php

namespace proof\sql\pdo;

/**
 * timestamp Nov 10, 2012 5:16:27 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql\pdo
 *
 *  Class represnting a sql connection via PDO.
 *
 */
use proof\sql\SQLConnection;
use proof\sql\Transactional;

class PDOConnection implements SQLConnection, Transactional
{

    /**
     * Mode of the connection.
     * @var proof\sql\PDOState $state
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

    public function initiate()
    {


        return $this->state->initiate();


    }

}