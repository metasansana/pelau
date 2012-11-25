<html><?php

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
//$t = new proof\app\web\TList(getcwd());
//
//$t->addTemplate("template.php");
//
//$doc = new proof\app\web\WebPage('Test Template',  'utf8');
//
//$doc->render($t);

//use proof\net\http\HttpRequest;
//
//
//echo HttpRequest::getPath();
//
//$l = HttpRequest::getPathList();
//
//foreach ($l as $key=>$v)
//{
//    echo "<br/>";
//    echo "Key #$key=>[$v]";
//}

use proof\sql\pdo\PDOConnection;

$con = new PDOConnection(new \PDO('benson', 'root', 'samurix'));

$con->prepare('SELECT * FROM vendors');

$tran = $con->getTransaction();

var_dump($tran);

$tran2 = $con->getTransaction();

var_dump($tran2);

$con->create('SELECT * FROM vendors');

?>