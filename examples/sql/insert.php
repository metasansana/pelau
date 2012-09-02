<?php
/**
 * This file shows how to use the sql package to perform simple inserts to a mysql database.
 * This tests assumes the code in tables.sql has been run on the database succesfully.
 */

require_once 'connect.php';

if($_POST['type'] === 'statement')
{

    $username = $con->escape(new String ($_POST['username']));

    $password = $con->escape(new String ($_POST['password']));

    $email = $con->escape(new String ($_POST['email']));

    $sql = "INSERT INTO members username, password, email VALUES ($username, $password, $email)";

    $stmt = $con->create(new String($sql));

}
elseif($_POST['type'] === 'ph-prepared')
{

    $sql = "INSERT INTO members username, password, email VALUES (?, ?, ?)";

    $stmt = $con->prepare(new String ($sql));

}
elseif($_POST['type'] === 'nm-prepared')
{

    $sql = "INSERT INTO members username, password, email VALUES (:username, :password, :email)";

    $stmt = $con->prepare(new String ($sql));

}


$effect = $stmt->push(new ExampleSQLStateListener);

$username = htmlentities($username);

if($effect === 1)
{
    echo "Successfully created one new member named $username!";

}
else
{
    echo "Failed attempting to create $username";
}


?>