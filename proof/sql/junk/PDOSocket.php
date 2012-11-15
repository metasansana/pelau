<?php
namespace proof\sql;
/**
 * timestamp Oct 3, 2012 4:35:49 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  <p>SQLSocket class for PDO.</p>
 *
 */
use proof\php\String;

class PDOSocket implements SQLSocket, Transactable
{

    /**
     * Internal PDO object.
     * @var \PDO $pdo
     * @access private
     */
    private $pdo = NULL;

    /**
     * Constructs a new PDOSocket.
     * @param \PDO $pdo    The PDO for this socket.
     */
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(String $sql)
    {

        return new Statement(new PDOStatement($sql, $this->pdo));

    }

    public function prepare(String $sql)
    {

        return new PreparedStatement(new PDOPreparedStatement($this->pdo->prepare((string)$sql)));

    }

    public function close()
    {

        $this->pdo = NULL;

    }

    public function start()
    {

        $this->pdo->beginTransaction();

        return new Transaction(new TransactionState($this, $this->pdo));

    }

}