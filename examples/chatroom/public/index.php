<?php
use croom\controllers\ChatServer;
use proof\app\StandardEventBus;
use proof\app\UserAgent;
use proof\app\HtmlDocument;

require_once 'classloader.php';

$server = new ChatServer( new UserAgent, new HtmlDocument);

$server->main();

?>