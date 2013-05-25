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

class PDOStatement extends \pelau\php\Object implements \pelau\sql\Statement
{

    /**
     * The PDOConnection object that will be used.
     * @var \sql\pdo\stmt $stmt
     * @access private
     */
    protected $stmt;

    /**
     * Constructs a new pelau\sql\PDOStatement
     * @param \PDO $con   The PDOConnection object that will be used.
     */
    public function __construct(\PDOStatement $stmt)
    {

        $this->stmt = $stmt;

   }

    public function query()
    {

        return new PDORowSet($this->stmt);

    }

    public function update()
    {

        return $this->stmt->rowCount();

    }



}