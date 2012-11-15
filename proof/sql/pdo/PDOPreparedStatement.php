<?php
namespace proof\sql\pdo;
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
use proof\sql\PreparedStatement;
use proof\util\Sequence;

class PDOPreparedStatement implements PreparedStatement
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
     * The associated connection class.
     * @var proof\sql\pdo\PDOConnection $pdo
     * @access private
     */
    private $con;


    public function __construct(\PDOStatement $pstmt)
    {

        $this->pstmt = $pstmt;
        


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

    public function query(Sequence $s)
    {



    }

    public function update()
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

    public function getConnection()
    {

    }

}