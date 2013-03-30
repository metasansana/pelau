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

class PDOTransaction extends \pelau\php\Object implements \pelau\sql\Transaction
{

    /**
     *
     * @var \pelau\sql\pdo\PDOClient
     */
    private $client;

    /**
     *
     * @var \PDO $pdo
     */
    private $pdo;

    /**
     * Constructs a new PDOTransaction
     * @param \PDO $pdo
     * @param \pelau\sql\pdo\PDOClient $client
     */
       public function __construct(\PDO $pdo, PDOClient $client)
    {

        $this->client = $client;

        $this->pdo = $pdo;

    }

    public function commit()
    {

        return $this->pdo->commit();

    }

     public function rollback()
    {

        return $this->pdo->rollBack();

    }

    public function prepare($sql)
    {

        return $this->client->prepare($sql);

    }

    public function create($sql)
    {

        return $this->client->create($sql);

    }

}