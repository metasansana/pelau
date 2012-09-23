<?php

require "proof.php";

use proof\net\http\HttpSessionManager;
use proof\net\http\HttpSession;
use proof\php\String;

echo "<p>Starting session..</p>";

$session = new HttpSession(new HttpSessionManager);

if($session->isActive())
{
    echo "Removing existing session. Please refresh!";
    $session->destroy();
    exit;
}

$time = time();

$session->start('testsession');

$session->delete('last');

$session->put("last", new String("<p>Last request was: $time.</p>"));



echo "<p>Done at $time, please click <a href=get.php?p=$time>this</a></p>";



?>
