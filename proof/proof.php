<?php
namespace proof;

define('PROOF_VERSION', '0.2');
spl_autoload_register(function ($class) { $class = str_replace("\\", '/', $class) . ".php"; require_once $class; });
