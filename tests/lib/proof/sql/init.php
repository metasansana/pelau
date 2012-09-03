<?php

use proof\sql\BasePDOConnection;

/**
 * Change the constructor if the database creds are different.
 */
$con = new BasePDOConnection("proof", "test", "password");

if(!$con->connect())
{
    print_r("Could not connect to the database!");
    exit();
}



?>