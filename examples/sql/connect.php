<?php

use proof\sql\BasePDOConnector;
use examples\includes\ExamplePDOConnector;
use examples\includes\MockConnectorErrorHandler;

/**
 * This example creates a PDO object using an implementor of the PDOConnector interface
 *
 */

$con = new ExamplePDOConnector(new BasePDOConnector(DSN, USR, PASSWD));

$con->connect(new MockConnectorErrorHandler);









?>



