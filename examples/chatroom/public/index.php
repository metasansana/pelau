<?php
use croom\controllers\ChatServer;
use proof\app\StandardEventBus;
use proof\app\UserAgent;
use proof\app\Page;

require_once 'classloader.php';

$server = new ChatServer( new UserAgent, new Page);

$server->main();

?>