<?php
<<<<<<< HEAD:proof/sql/pdo/PDOPreparedStatement.php

namespace proof\sql\pdo;
=======
namespace proof\sql;
>>>>>>> Black Friday?:proof/sql/PDOPreparedStatement.php

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

class PDOPreparedStatement implements SQLPreparedStatement
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

<<<<<<< HEAD:proof/sql/pdo/PDOPreparedStatement.php
=======
    /**
     * Helper class for PDOStatements.
     * @var proof\sql\PDOStatementProxy    $helper
     * @access private
     */
    private $helper;


>>>>>>> Black Friday?:proof/sql/PDOPreparedStatement.php
    public function __construct(\PDOStatement $pstmt)
    {

        $this->pstmt = $pstmt;
<<<<<<< HEAD:proof/sql/pdo/PDOPreparedStatement.php
=======
        $this->helper = new PDOStatementProxy;

>>>>>>> Black Friday?:proof/sql/PDOPreparedStatement.php

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

    public function fetch(TupleSet $set)
    {

        $w = new PDOWorker;

<<<<<<< HEAD:proof/sql/pdo/PDOPreparedStatement.php
        if (!$this->pstmt->execute($this->params))
        {
            return $w->error($this->pstmt->errorInfo());
        }

        return $w->fetch($this->pstmt, $s);
=======
        if ($this->pstmt->execute($this->params))
        {

            return $this->helper->dofetch($this->pstmt, $set);

        }
        else
        {

            $this->helper->generateException($this->pstmt->errorInfo());

        }

>>>>>>> Black Friday?:proof/sql/PDOPreparedStatement.php

    }

    public function push()
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