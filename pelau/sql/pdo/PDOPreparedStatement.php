<?php

namespace pelau\sql\pdo;

/**
 * timestamp Aug 4, 2012 1:42:43 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql
 *
 * Wrapper class representing a PreparedStatement. This class is independent of implementation details.
 */
use pelau\sql\PreparedStatement;
use pelau\util\Sequence;

class PDOPreparedStatement implements PreparedStatement
{

    /**
     *
     * Arguments that will replace the placeholders of the prepared statement
     * @var array $params
     * @access private
     */
    private $params = array ();

    /**
     * The wrapped PDOStatement
     * @var \PDOStatement $pstmt
     * @access private
     */
    private $pstmt;

    public function __construct(\PDOStatement $pstmt)
    {

        $this->pstmt = $pstmt;

    }

    public function bind($value)
    {


        $this->params[] = $value;

        return $this;

    }

    public function bindName($name, $value)
    {

        $name = ":$name";

        $this->params[$name] = $value;

        return $this;

    }

    public function query(Sequence $s)
    {

        $w = new PDOWorker;

        if (!$this->pstmt->execute($this->params))
        {
            return $w->error($this->pstmt->errorInfo());
        }

        return $w->fetch($this->pstmt, $s);

    }

    public function update()
    {

        if (!$this->pstmt->execute($this->params))
        {

            $w = new PDOWorker;

            return $w->error($this->pstmt->errorInfo());
        }
        else
        {
            return $this->pstmt->rowCount();
        }

    }

}