<?php

namespace proof\sql;

/**
 * timestamp Aug 4, 2012 9:00:02 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  FastStatement represents an SQL statement that will be executed in one trip, that is, without preperation.
 *  <b>The contents of FastStatements should be properly escaped to defened against SQL injection attacks.</b>
 *SQLInstruction
 */
use proof\php\String;
use proof\util\Map;

class Statement extends AbstractSQLCommand
{

    /**
     * An sql statement string
     * @var proof\php\String
     */
    private $stmt;

    /**
     * A PDO object that represents a link to an active database.
     * @var \PDO $link
     */
    private $link;

    /**
     * Constructs a new FastStatement.
     * @param String $stmt    A String representation of the statement.
     * @param \PDO $link      Optional PDO object to be used to execute the statement.
     */
    public function __construct(String $stmt, \PDO $link)
    {

        $this->stmt = $stmt;
        $this->link = $link;

    }

    private function _query()
    {

        $result = $this->link->query($this->stmt);

        if (!$result)
            $this->changeState($this->link->errorInfo());

        return $result;

    }

    public function escape(String $sql)
    {
        return $this->link->quote("$sql");
    }

    public function fetch(FetchHandler $fhandler, SQLStateHandler $shandler = NULL)
    {

        $result = $this->_query();

        $count = 0;

        if ($result)
        {
            foreach ($result as $row)
            {

                $fhandler->onFetch(new Map($row));
                $count++;

            }

            return $count;
        }
        else
        {


            return $result;
        }

    }

    public function push(SQLStateHandler $h = NULL)
    {

        $result = $this->_query();

        if ($result)
        {
            return $result->rowCount();
        }
        else
        {

            return $result;
        }

    }

}