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
 * Wrapper class representing a PreparedStatement. This class is independent of implementation details.
 */
use proof\util\Map;

class PDOPreparedStatement implements SQLCommand
{

    /**
     *
     * Arguments that will replace the placeholders of the prepared statement
     * @var array $params
     * @access private
     */
    private $params = array();

    /**
     * The wrapped SQLPreparedStatement
     * @var proof\sql\SQLPreparedStatement $pstmt
     * @access private
     */
    private $pstmt;


    public function __construct(\PDOStatement $pstmt)
    {

        $this->pstmt = $pstmt;

        parent::__construct();

    }

    public function bind($value)
    {


        $this->params[] =  $value;

        return $this;

    }

    public function bindName($name, $value)
    {

        $name = ":$name";

        $this->params[$name] =  $value;

        return $this;

    }



    public function fetch(RowCache $cache)
    {

        if ($this->pstmt->execute($this->params))
        {

            $count = -1;

            $row = true;

            do
            {

                $row = $this->pstmt->fetch();

                if ($row)
                    $cache->onFetch(new Map($row));

                $count++;
            }
            while ($row);

                $this->fireFetchEvent (new FetchEvent ($this));


            return $count;
        }
        else
        {

            $this->fireStateChange(new StateEvent($this->pstmt->errorInfo(), $this));

        }

    }

    public function push()
    {

        if ($this->pstmt->execute($this->params))
        {

                $this->firePushEvent (new PushEvent ($this));

            return $this->pstmt->rowCount();
        }
        else
        {

            $this->fireStateChange(new StateEvent($this->pstmt->errorInfo(), $this));

            return NULL;
        }

    }

}