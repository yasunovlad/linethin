<?php
// MAIN SETTINGS
ini_set('display_errors', 1);
error_reporting(E_ALL);

// CONNETCTION FILE SYSTEMS
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');

// CALLING Router
$class__router = new Router();
$class__router->run();
?>