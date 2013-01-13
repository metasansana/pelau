<?php
namespace pelau\sql\pdo;
/**
 * timestamp Nov 15, 2012 3:34:00 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql\pdo
 *
 * Class representing a pdo specific transation.
 *
 */
use pelau\sql\Transaction;
use pelau\sql\SQLConnection;

class PDOTransaction implements Transaction
{

    /**
     * The PDO object.
     * @var \PDO $pdo
     * @access private
     */
    private $pdo;

    /**
     * The state object used for sql execution.
     * @var pelau\sql\pdo\ValidState $valid
     * @access private
     */
    private $valid;

    /**
     * The ActiveState of the related connection.
     * @var pelau\sql\pdo\ActiveState $active
     * @access private
     */
    private $active;

    public function __construct(\PDO $pdo, ValidState $valid, ActiveState $active)
    {

        $this->pdo = $pdo;
        $this->active = $active;
        $this->valid = $valid;
        $active->swap(new InvalidState);

    }

    private function _release()
    {

        $this->valid = $this->active->swap($this->valid);

    }

    public function commit()
    {

        $this->pdo->commit();
        $this->_release();


    }

     public function rollback()
    {

        $this->pdo->rollBack();
        $this->_release();

    }

    public function create($sql)
    {

        return $this->valid->create($sql);

    }

    public function prepare($sql)
    {

        return $this->valid->prepare($sql);

    }

    public function getTransaction()
    {

        return $this;

    }


}