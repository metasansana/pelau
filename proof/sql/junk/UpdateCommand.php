<?php

namespace proof\sql\pdo;


/**
 * timestamp Nov 11, 2012 7:55:22 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql\pdo
 *
 *
 */
class UpdateCommand extends PDOCommand
{

    /**
     * The sql to be executed
     * @var string $sql
     * @access private
     */
    private $sql;

    /**
     * The number of rows affected.
     * @var int $count
     * @access private
     */
    private $count;

    public function __construct($sql)
    {

        $this->sql = $sql;

    }

    public  function count()
    {
        return $this->count;
    }

    public function execute()
    {

        $flag = $this->pdo->exec($this->sql);

        if($flag === false)
            return false;

        $this->count = $flag;

    }

}