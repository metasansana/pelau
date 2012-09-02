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
 * Class representing a prepared statement. Prepared statements perform two trips to the server in order to
 * execute a statement or query. This class wraps the the result of a \PDO::prepare() call so to provide
 * cleaner operations.
 *
 *
 */
use proof\util\Map;
use proof\util\ArrayList;

class PreparedStatement extends SQLCommand
{

    /**
     * The arguments that the prepared statement is to be outfitted with.
     * This array must have the same number of elements as the place holders in the statement.
     * @var array $params
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
     *  Sets the parameters for statement as named params.
     * @param array $params
     * @return \proof\sql\PreparedStatement
     */
    public function setNamedParams(Map $params)
    {

        $named = array();

        foreach ($params as $name => &$value)
        {

            $edited = ":$name";

            $named[$edited] = $value;


        }

        $this->params = $named;

        return $this;

    }

    /**
     * Sets the params for the statement as a linear list of values.
     * @param array $params
     * @return \proof\sql\PreparedStatement
     */
    public function setPlaceHolderParams(ArrayList $params)
    {

        $this->params = $params->toArray();
        return $this;

    }

    public function fetch(FetchHandler $h)
    {

        if ($this->pstmt->execute($this->params))
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

            $this->changeState(new SQLState($this->pstmt->errorInfo()));
            return FALSE;
        }

    }

    public function push()
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