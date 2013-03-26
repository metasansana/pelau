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

    public function query()
    {

        $model = new PDOStatementModel;

        if (!$this->pstmt->execute($this->params))
            return $model->error($this->pstmt->errorInfo());

        return $model->fetch($this->pstmt);

    }

    public function update()
    {

        if (!$this->pstmt->execute($this->params))
        {

            $model = new PDOStatementModel;

            return $model->error($this->pstmt->errorInfo());
        }
        else
        {
            return $this->pstmt->rowCount();
        }

    }

}