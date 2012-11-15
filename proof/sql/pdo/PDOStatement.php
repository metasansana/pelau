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
use proof\php\String;
use proof\sql\Statement;
use proof\util\Sequence;

class PDOStatement implements Statement
{

    /**
     * The PDOConnection object that will be used.
     * @var proof\sql\pdo\PDOConnection $con
     * @access private
     */
    private $con;

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
    public function __construct(String $sql, \PDO $pdo)
    {

        $this->sql = $sql;
        $this->con = $pdo;

    }

    public function query(Sequence $s)
    {

        if(!$this->con->execute(new QueryCommand($this->sql, $s)))
                $this->con->execute (new ErrorCommand);

    }

    public function update()
    {

        $cmd = new UpdateCommand($this->sql);

        if(!$this->con->execute($cmd))
            $this->con->execute (new ErrorCommand);

        return $cmd->count();

    }

    public function getConnection()
    {

        return $this->con;

    }

}