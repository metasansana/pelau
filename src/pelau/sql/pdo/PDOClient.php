<?php
namespace pelau\sql\pdo;
/**
 * timestamp Nov 15, 2012 3:09:42 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql\pdo
 *
 *  SQLClient class for using \PDO.
 *
 */
class PDOClient extends \pelau\php\Object
{

    /**
     * Internal \PDO object of this class.
     * @var pelau\sql\pdo
     * @access private
     */
    private $pdo;

    /**
     * Constructs a new PDOActive object.
     * @param \PDO $pdo The PDO object for the states.
     */
    public function __construct(\PDO $pdo)
    {

        $this->pdo = $pdo;

    }

    public function create($sql)
    {

        return new PDOStatement($this->pdo->query($sql));

    }

    public function prepare($sql)
    {

        return new PDOPreparedStatement($this->pdo->prepare($sql));

    }






}