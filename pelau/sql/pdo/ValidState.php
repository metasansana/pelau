<?php
namespace pelau\sql\pdo;
/**
 * timestamp Nov 10, 2012 4:38:50 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql\pdo
 *
 * Class representing a PDO conneciton in auto commit mode.
 *
 */
use pelau\php\UnsupportedOperationException;
class ValidState implements  PDOState
{

    /**
     * Internal PDO object.
     * @var \PDO $pdo
     * @access private
     */
    private $pdo;

    /**
     * The active state of the connection
     * @var pelau\sql\pdo\ActiveState $state
     * @access private
     */
    private $active;

    public function __construct(\PDO $pdo, ActiveState $active)
    {

        $this->pdo = $pdo;
        $this->active = $active;

    }


    public function create($sql)
    {

        return new PDOStatement((string)$sql, $this->pdo);

    }

    public function prepare($sql)
    {

        return new PDOPreparedStatement($this->pdo->prepare((string)$sql));

    }

    public function getTransaction()
    {

        if (!$this->pdo->beginTransaction())
            throw new UnsupportedOperationException;

        return new PDOTransaction($this->pdo, $this, $this->active);

    }



}