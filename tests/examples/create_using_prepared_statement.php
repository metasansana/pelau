<?php
use proof\sql\NamedParameters;
use proof\sql\PlaceholderParameters;
use proof\sql\PreparedStatement;
use proof\sql\StateHandler;


require_once 'testinit.php';

$flag = TRUE;

if(isset($_POST['run']))
{

    if($_POST['params'] === 'named')
        $params = new NamedParameters($input);

    if($_POST['params'] === 'placeholders')
        $params = new PlaceHolderParameters($input);

    $pdo = new \PDO($dsn, $usr, $passwd);

    $stmt = new PreparedStatement($pdo->prepare("INSERT INTO todo VALUES ($args)"));

    $count = $stmt->push();

    





}
else
{
    echo <<<HTML
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>PROOF::Create test</title>
    </head>
    <body>
    <p>Use the form below to create a new task.</p>
    <form>
        <p>Task: <input type="text" name="task"/>    Must be text.</p>
        <p>Status: <input type="text" name="status"/>    Must be integer</p>
        Parameter Syle:
        <p>Placeholders<input type="radio" value="placeholders" name="params"/><p>Named<input type="radio" value="named" name="params"/>
        <p><input type="submit" value="create"/></p>
    </form>
    </body>
</html>
HTML;
}

class Trap implements StateHandler
{
    public function onChange(\proof\sql\SQLState $state)
    {
        global $flag;

        $flag = FALSE;
    }
}
?>