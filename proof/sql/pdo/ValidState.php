<?php
namespace proof\sql\pdo;
/**
 * timestamp Nov 10, 2012 4:38:50 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql\pdo
 *
 * Class representing a PDO conneciton in auto commit mode.
 *
 */
use proof\php\UnsupportedOperationException;
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
     * @var proof\sql\pdo\ActiveState $state
     * @access private
     */
    private $active;

    public function __construct(\PDO $pdo, ActiveState $active)
    {

        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
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