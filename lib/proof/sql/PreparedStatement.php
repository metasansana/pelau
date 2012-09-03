<?php

namespace proof\sql;

/**
 * timestamp Aug 4, 2012 1:42:43 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *
 * Class representing a prepared statement.
 *
 * <i>Note: Avoid directly creating new instances of this class, use the PDOConnection::prepare() method instead.
 *
 *
 *
 *
 */
use proof\util\Map;

class PreparedStatement implements SQLCommand
{

    /**
     *
     * Arguments that will replace the placeholders of the prepared statement
     * @var proof\util\Map $params
     * @access private
     */
    private $params;

    /**
     *  A preprared statement issued by PDO::prepare()
     * @var \PDOStatement $pstmt
     * @access private
     */
    private $pstmt;

    /**
     *  Constructs a new PreparedStatement object
     * @param \PDOStatement $pstmt    A PDOStatement object created from PDO::prepare()
     */
    public function __construct(\PDOStatement $pstmt)
    {

        $this->pstmt = $pstmt;

    }

     /**
     *
     * @param mixed $params
     * @return \proof\sql\PreparedStatement
     */
    public function addParameter($value)
    {

        $key = (string)($this->params->size() + 1);

        $this->params->add($key, $value);

        return $this;

    }

    /**
     *
     * @param type $name
     * @param type $value
     * @return \proof\sql\PreparedStatement
     */
    public function addNamedParameter($name, $value)
    {

        $name = ":$name";

        $this->params->add($name, $value);

        return $this;

    }



    public function fetch(FetchHandler $h, SQLStateHandler $l = NULL)
    {

        if ($this->pstmt->execute($this->params->toArray()))
        {

            $count = -1;    //Looping will still execute the block when the first null row is pulled. Omit that from count.

            $row = true;

            do
            {

                $row = $this->pstmt->fetch();

                if ($row)
                    $h->onFetch(new Map($row));

                $count++;
            }
            while ($row);

            return $count;
        }
        else
        {

            $l->onStateChange(new SQLState($this->pstmt->errorInfo()));

            return FALSE;
        }

    }

    public function push(SQLStateHandler $l = NULL)
    {

        if ($this->pstmt->execute($this->params))
        {
            return $this->pstmt->rowCount();
        }
        else
        {

            $this->changeState(new SQLState($this->pstmt->errorInfo()));

            return FALSE;
        }

    }

}