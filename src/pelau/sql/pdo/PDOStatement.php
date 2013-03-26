<?php
namespace pelau\sql\pdo;
/**
 * timestamp Oct 3, 2012 9:48:19 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql\pdo
 *
 *  SQL statement class that uses PDO.
 *
 */

class PDOStatement implements \pelau\sql\Statement
{

    /**
     * The PDOConnection object that will be used.
     * @var \PDO $pdo
     * @access private
     */
    private $pdo;

    /**
     * A string representing an sql command.
     * @var string $sql
     */
    private $sql;


    /**
     * Constructs a new pelau\sql\PDOStatement
     * @param \PDO $con   The PDOConnection object that will be used.
     */
    public function __construct(\PDO $pdo, $sql)
    {

        $this->pdo = $pdo;

        $this->sql = $sql;

    }

    public function query()
    {

        $model = new PDOStatementModel();

        $stmt = $this->pdo->query($this->sql);

        if(!$stmt)
        {
            return $model->error ($this->pdo->errorInfo ());
        }

        return $model->fetch($stmt);

    }

    public function update()
    {

        $result = $this->pdo->exec($this->sql);

        if($result  === false)
        {
            $w = new PDOStatementModel();
            $w->error($this->pdo->errorInfo());
        }

        return $result;

    }



}