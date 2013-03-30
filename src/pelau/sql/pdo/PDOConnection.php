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

class PDOConnection extends \pelau\php\Object implements \pelau\sql\SQLConnection
{

    /**
     *
     * @var \PDO $pdo
     * @access private
     */
    private $pdo;

    public function __construct(\PDO $pdo)
    {

        $this->pdo = $pdo;

    }

    public function getClient()
    {

        return new PDOClient($this->pdo);

    }


    public function getTransaction()
    {

        if(!$this->pdo->beginTransaction())
            throw new \pelau\php\UnsupportedOperationException;

        return new PDOTransaction($this->pdo, new PDOClient($this->pdo));

    }

}