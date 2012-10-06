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
 *  SQLSocket class for PDO.
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



    }

    public function prepare(String $sql)
    {

    }

    public function close()
    {

    }

    public function execute(SQLSocketCommand $cmd)
    {

    }

    public function startTransaction()
    {

    }
}