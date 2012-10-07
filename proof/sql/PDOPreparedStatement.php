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

    /**
     * Helper class for PDOStatements.
     * @var proof\sql\PDOStatementProxy    $helper
     * @access private
     */
    private $helper;


    public function __construct(\PDOStatement $pstmt)
    {

        $this->pstmt = $pstmt;
        $this->helper = new PDOStatementProxy;


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

    public function fetch(TupleSet $set)
    {


        if ($this->pstmt->execute($this->params))
        {

            return $this->helper->dofetch($this->pstmt, $set);

        }
        else
        {

            $this->helper->generateException($this->pstmt->errorInfo());

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

            $this->helper->generateException($this->pstmt->errorInfo());

        }

    }

}