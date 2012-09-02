<?php

spl_autoload_register(function ($class) {


            $class = "../../../proof/".str_replace("\\", '/', $class) . ".php";

            $result = (include_once $class);

            if($result)
            {

            }
            else
            {

            }

        });

new proof\util\ArrayList;




?>