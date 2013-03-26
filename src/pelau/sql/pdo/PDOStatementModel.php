<?php
namespace pelau\sql\pdo;
/**
 * timestamp Nov 17, 2012 10:02:59 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package pelau\sql\pdo
 *
 *  Internal helper class for PDO Statement classes.
 *
 */
class PDOStatementModel
{


    public function error(array $err)
    {

        throw new \pelau\sql\SQLException($err[0], $err[1], $err[2]);

    }

    public function fetch(\PDOStatement $stmt)
    {

        $rows = new \pelau\util\ArrayList;

        foreach($stmt as $row)
        {
            $rows->add($row);
        }

        return $rows;

    }

}