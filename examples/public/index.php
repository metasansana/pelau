<?php
//$start  = microtime();
require_once 'proof.php';
//new proof\util\ArrayList;
//new proof\util\Map;
//new proof\php\String;
//new \proof\php\Object();
//
//session_name('bdigsijpfg');
//
//$time = microtime() - $start;
//
//echo "<p>$time</p>";

$t = new proof\app\web\TList(getcwd());

$t->addTemplate("template.php");

$doc = new proof\app\web\WebPage('Test Template',  'utf8');

$doc->render($t);


?>