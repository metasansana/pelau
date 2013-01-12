<?php
namespace proof\sql\pdo;
/**
 * timestamp Nov 17, 2012 10:02:59 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql\pdo
 *
 *  Internal helper class for PDO Statement classes.
 *
 */
use proof\util\Sequence;

class PDOWorker
{


    public function error(array $err)
    {

        throw new \proof\sql\SQLException($err[0], $err[1], $err[2]);

    }

    public function fetch(\PDOStatement $stmt, Sequence $s)
    {

        $count = 0;

        foreach($stmt as $row)
        {
            $s->add($row);
            $count++;
        }

        return $count;

    }

}