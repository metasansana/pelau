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

class PreparedStatement implements SQLPreparedStatement
{

    /**
     *
     * Arguments that will replace the placeholders of the prepared statement
     * @var array $params
     * @access private
     */
    private $params;

    /**
     * The wrapped SQLPreparedStatement
     * @var proof\sql\SQLPreparedStatement $pstmt
     * @access private
     */
    private $pstmt;

    /**
     *  Constructs a new PreparedStatement object
     * @param \proof\sql\SQLPreparedStatement $pstmt    The SQLPreparedStatement this class wraps.
     */
    public function __construct(SQLPreparedStatement $pstmt)
    {

        $this->pstmt = $pstmt;

    }

    public function bind($value)
    {

        $this->pstmt->bind($value);

        return $this;

    }

    public function bindName($name, $value)
    {

        $this->pstmt->bindName($name, $value);

        return $this;

    }

    public function fetch(TupleSet $set)
    {

        return $this->pstmt->fetch($set);

    }

    public function push()
    {

        return $this->pstmt->push();

    }

}