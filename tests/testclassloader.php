<?php

/**
 * Class loader for unit testing.
 */

spl_autoload_register(function ($class) {

            print "Searching for the $class class.. \n";

            $class = str_replace("\\", '/', $class) . ".php";

            require_once $class;

            print "Done!\n";

        });
?>
