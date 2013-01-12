<?php

define('PELAU_VERSION', '0.1');
spl_autoload_register(
        function ($class) {
            $class = str_replace("\\", '/', $class) . ".php";
            require_once $class;
        });

if (!defined('NO_ERROR_EXCEPTION'))
{

    set_error_handler(
            function ($errno, $errstr, $errfile, $errline ) {
                throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
            });

}

if (defined('HANDLE_EXCEPTIONS'))
{
    set_exception_handler('pelau\\php\\ExceptionHandler::onException');
}

?>
