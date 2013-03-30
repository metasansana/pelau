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

class PDOPreparedStatement extends PDOStatement implements PreparedStatement
{


    public function bindInteger($index, $int)
    {

        $this->pstmt->bindParam($index, (int)$int, \PDO::PARAM_INT);

        return $this;

    }

    public function bindString($index, $string)
    {

        $this->pstmt->bindParam($index, (string)$string, \PDO::PARAM_STR);

        return $this;

    }


}