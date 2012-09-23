<?php

define('PROOF_VERSION', '0.1');
spl_autoload_register(function ($class) { $class = str_replace("\\", '/', $class) . ".php"; require_once $class; });
?>
