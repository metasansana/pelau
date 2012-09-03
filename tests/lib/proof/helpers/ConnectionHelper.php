<?php
namespace proof\helpers;
/**
 * timestamp Sep 3, 2012 4:52:36 AM
 *
 *
 * @author Lasana Murray  <dev@trinistorm.org>
 * @copyright 2012 Lasana Murray
 * @package proof\helpers
 *
 *  <b>Unit testing class, NOT part of the official package!</b>
 *
 */
class ConnectionHelper
{


    public static function getBaseConnection($dsn, $username, $passwd)
    {
        $con = new \proof\sql\BasePDOConnection($dsn, $username, $passwd);

        if(!$con->connect())
            throw new \Exception("Unable to connect to the database!");

        return $con;
    }

}