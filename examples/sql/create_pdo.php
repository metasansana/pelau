<?php

//Basic connector with no additional features.
$standard = new StandardPDOConnector(DSN, USR, PASSWD);

//Connector that does not issue warnings or throw exceptions
$silent = new SilentPDOConnector($con);



?>


