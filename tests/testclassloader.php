<?php

/**
 * Class loader for unit testing.
 */

spl_autoload_register(function ($class) {

            print "Searching for the $class class.. \n";

            $class = str_replace("\\", '/', $class) . ".php";

            $result = (include_once $class);

            if($result)
            {
                print "Found $class!\n";
            }
            else
            {
                print "..\n";
            }

        });
?>
