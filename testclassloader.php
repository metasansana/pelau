<?php
/**
 *Class loader for unit testing.
 */
spl_autoload_register(function ($package)
{
            printf("Searching for $package.\n");
          $php = '.php';

        $package = str_replace("\\", '/', $package) . $php;

        if (file_exists($package))
        {
            require_once $package;
            return;
        }
        else
        {
            //check the include path
            $package = "/srv/www/saferlanes/includes/".$package; //XXX this is specific to my instalation change for yours!

            if (file_exists($package))
            {
                require_once $package;
                return;
            }

        }

            printf("Could not locate the $package class!\n");


});
?>
