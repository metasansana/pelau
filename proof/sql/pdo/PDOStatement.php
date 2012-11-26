<?php
namespace proof\sql\pdo;
/**
 * timestamp Oct 3, 2012 9:48:19 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql\pdo
 *
 *  SQL statement class that uses PDO.
 *
 */
use proof\sql\Statement;
use proof\util\Sequence;

class PDOStatement implements Statement
{

    /**
     * The PDOConnection object that will be used.
     * @var \PDO $pdo
     * @access private
     */
    private $pdo;

    /**
     * String representing the statement.
     * @var string $sql
     * @access private
     */
    private $sql;

    /**
     * Constructs a new proof\sql\PDOStatement
     * @param string $sql    The sql statement.
     * @param \PDO $con   The PDOConnection object that will be used.
     */
    public function __construct($sql, \PDO $pdo)
    {

        $this->sql = $sql;
        $this->pdo = $pdo;

    }

    public function query(Sequence $s)
    {

        $w = new PDOWorker();

        $stmt = $this->pdo->query($this->sql);

        if(!$stmt)
        {
            return $w->error ($this->pdo->errorInfo ());
        }

        return $w->fetch($stmt, $s);

    }

    public function update()
    {

        $result = $this->pdo->exec($this->sql);

        if($result  === false)
        {
            $w = new PDOWorker();
            $w->error($this->pdo->errorInfo());
        }

        return $result;

    }


}