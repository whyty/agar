<?php
require 'Config/paths.php';

function __autoload($class) {
    require LIBS . $class .".php";
}


// Load the Bootstrap!
$bootstrap = new Bootstrap();


$bootstrap->init();

?>