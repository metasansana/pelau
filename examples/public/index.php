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
use proof\php\String;

$dir = new String (getcwd());

$title = new String('Test Template');

$charset = new String('utf8');

$doc = new proof\app\web\WebTemplate($dir, $title, $charset);

$doc->add(new String('template.php'));

$doc->render();


?>