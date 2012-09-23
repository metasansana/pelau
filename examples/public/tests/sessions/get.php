<?php

require "proof.php";

use proof\net\http\HttpSessionManager;
use proof\net\http\HttpSession;

echo "<p>Resuming session..</p>";

$session = new HttpSession(new HttpSessionManager);

$session->start('testsession');

if(!$session->isActive())
{
    echo "Cannot create the session!";
    exit;
}

echo $session->get('last');

echo "<p>Done!</p>";




?>