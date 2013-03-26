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

class PDOConnection implements \pelau\sql\SQLConnection
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

        return new PDOTransaction($this->pdo, new PDOClient($this->pdo));

    }

}