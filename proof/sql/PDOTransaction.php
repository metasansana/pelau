<?php
namespace proof\sql;
/**
 * timestamp Oct 4, 2012 5:10:13 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql
 *
 *  PDO specific Transaction class.
 */
use proof\php\String;

class PDOTransaction implements SQLTransaction
{

    /**
     * The socket this transaction wraps.
     * @var proof\sql\Socket $socket
     * @access private
     */
    private $socket;

    /**
     * PDO object for this transaction.
     * @var \PDO $pdo
     * @access private
     */
    private $pdo;

    /**
     * Constructs a new Transaction class.
     * @param \proof\sql\PDOSocket $socket    The socket this transaction wraps.
     * @param \PDO $pdo     PDO object for this transaction.
     */
    /**
     *
     * @param \proof\sql\PDOSocket $socket
     * @param \PDO $pdo
     */
    public function __construct(PDOSocket $socket, \PDO $pdo)
    {
        $this->socket = $socket;
        $this->pdo = $pdo;
    }


    public function create(String $sql)
    {

        return $this->socket->create($sql);

    }

    public function prepare(String $sql)
    {

        return $this->socket->prepare($sql);

    }

    public function commit()
    {

        return $this->pdo->commit();

    }

    public function cancel()
    {

        return $this->pdo->rollBack();

    }

    public function close()
    {

        $this->socket->close();

    }

}