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


    public static function getPDO($dsn = "proof", $username =  "proof-user", $passwd = "test")
    {


        $con = new\PDO($dsn, $username, $passwd);

        return $con;
    }

}