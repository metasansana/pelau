<?php

use proof\sql\BasePDOConnection;
use examples\includes\ExamplePDOConnector;
use examples\includes\MockConnectorErrorHandler;

/**
 * This example creates a PDO object using an implementor of the PDOConnector interface
 *
 */

$con = new ExamplePDOConnector(new BasePDOConnection(DSN, USR, PASSWD));

$con->connect(new MockConnectorErrorHandler);









?>



