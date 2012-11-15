<?php
namespace proof\sql\pdo;
/**
 * timestamp Nov 11, 2012 8:19:04 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\sql\pdo
 *
 *
 */
class ErrorCommand extends PDOCommand
{


    public function execute()
    {

        $info = $this->pdo->errorInfo();

        throw new SQLException($info[0], $info[1], $info[2]);

    }
}