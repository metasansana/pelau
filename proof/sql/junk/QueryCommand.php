<?php
namespace proof\sql\pdo;
/**
 * timestamp Nov 10, 2012 8:53:52 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql\pdo
 *
 *  Command class for executing an auto commited query.
 *
 */
use proof\util\Sequence;
use proof\sql\SQLException;

class QueryCommand extends PDOCommand
{


    /**
     * The sql query string.
     * @var string $sql
     * @access private
     */
    private $sql;

    /**
     * The Sequence to recieve the result.
     * @var proof\util\Sequence $s
     * @access private
     */
    private $s;

    public function __construct($sql, Sequence $s)
    {

        $this->sql= $sql;
        $this->s = $s;

    }

    public function execute()
    {

        $stmt = $this->pdo->query($this->sql);

        if(!$stmt)
            return false;

        foreach($stmt as $row)
            $s->add ($row);

        return true;



    }
}