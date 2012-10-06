<?php
namespace proof\sql;
/**
 * timestamp Oct 6, 2012 2:44:49 PM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql;
 *
 * Helper class for PDO statements and prepared statements.
 *
 */
class PDOStatementProxy
{

    public function dofetch(\PDOStatement $stmt, TupleSet $set)
    {

          $count = 0;

           foreach($stmt as $tuple)
            {

                $count++;
                $set->addTupple ($tuple);

            }

            return $count;

    }

    public function generateException(array $info)
    {
        throw new SQLException($info[0], $info[1], $info[2]);
    }
}