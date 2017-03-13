<?php
require PATH. DIRECTORY_SEPARATOR . 'Framework' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'php_error.php';
require PATH. DIRECTORY_SEPARATOR . 'Framework' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'show_var.php';


try
{
    $conf = require PATH . DIRECTORY_SEPARATOR . "App" . DIRECTORY_SEPARATOR . "config.php";
    if($conf["AppMode"] === "develop")
    {
        \php_error\reportErrors();
    }
}
catch (\Throwable $e)
{
   echo $e->getMessage();
}



include_once PATH . DIRECTORY_SEPARATOR . "Framework" . DIRECTORY_SEPARATOR . "System" . DIRECTORY_SEPARATOR . "bootstrap.php";
include_once PATH . DIRECTORY_SEPARATOR . "App" . DIRECTORY_SEPARATOR . "config.php";
include_once PATH . DIRECTORY_SEPARATOR . "App" . DIRECTORY_SEPARATOR . "routes.php";
include_once PATH . DIRECTORY_SEPARATOR . "App" . DIRECTORY_SEPARATOR . "bootstrap.php";


