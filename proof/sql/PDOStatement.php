<?php

namespace proof\sql;

/**
 * timestamp Oct 3, 2012 9:48:19 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  SQL statement class that uses PDO.
 *
 */
use proof\php\String;

class PDOStatement implements SQLStatement
{

    /**
     * The PDO object that will be used.
     * @var \PDO $pdo
     * @access private
     */
    private $pdo;

    /**
     * String representing the statement.
     * @var proof\php\String
     * @access private
     */
    private $stmt;

    /**
     * Helper class for PDOStatements.
     * @var proof\sql\PDOStatementProxy    $helper
     * @access private
     */
    private $helper;

    /**
     * Constructs a new proof\sql\PDOStatement
     * @param String $stmt    The sql statement.
     * @param \PDO $pdo    The PDO object that will be used during execution.
     */
    public function __construct(String $stmt, \PDO $pdo)
    {
        $this->stmt = $stmt;
        $this->pdo = $pdo;
        $this->helper = new PDOStatementProxy;

    }

    public function fetch(TupleSet $set)
    {

        $stmt = $this->pdo->query((string) $this->stmt);

        if ($stmt)
        {

            return $this->helper->dofetch($stmt, $set);
        }
        else
        {

            $this->helper->generateException($this->pdo->errorInfo());
        }

    }

    public function push()
    {

        $result = $this->pdo->query((string) $this->stmt);

        if ($result === FALSE)
            $this->helper->generateException($this->pdo->errorInfo());

        return $result;

    }

}