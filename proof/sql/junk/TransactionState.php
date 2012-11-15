<?php
namespace proof\sql\pdo;
/**
 * timestamp Nov 10, 2012 4:43:51 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql\pdo
 *
 *  Class representing a PDO connection in transaction mode.
 *
 */

class TransactionState implements PDOState
{

    /**
     * Internal PDO object.
     * @var \PDO $pdo
     * @access private
     */
    private $pdo;

    /**
     * Internal auto commit link used for basic operations.
     * @var proof\sql\OpenState $auto
     * @access private
     */
    private $con;

    /**
     *
     * @param \proof\sql\OpenState $con    Internal auto commit link used for basic operations.
     *  @param \PDO $pdo    Internal PDO object.
     */
    public function __construct(ValidState $con, \PDO $pdo)
    {

        $this->con = $con;
        $this->pdo = $pdo;

    }

    public function close()
    {

        if($this->pdo->inTransaction())
            throw new UnresolvedTransactionException;

        unset($this->pdo);   //Delete this reference

        $this->con->close();   //Tell the AutoMode to do the same.

    }

    public function commit()
    {

        $this->pdo->commit();
        $this->pdo->beginTransaction();

    }

    public function cancel()
    {

        $this->pdo->rollBack();
        $this->pdo->beginTransaction();

    }

    public function create($sql)
    {

        return $this->con->create($sql);

    }

    public function prepare(String $sql)
    {

        return $this->con->prepare($sql);

    }

    public function setAutoCommit($switch)
    {

        if($switch)
            unset($this->pdo);

        $this->con->setAutoCommit($switch);

    }

    public function execute(PDOCommand $cmd)
    {
        return $this->con->execute($cmd);
    }
}