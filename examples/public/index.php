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


$i = new proof\util\IteratorAdapter(new \ArrayIterator(array(0,1,2,3,4)), 5);

$count = 0;

while($i->hasNext())
{

    echo "Item $count:".$i->next()."<br/>";

    $count++;

}


?>