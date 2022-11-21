<?php

define('DS', DIRECTORY_SEPARATOR);
 
function micargador($classname) {
    $classname = __DIR__ . DS . '..' . DS . str_replace('\\', DS, $classname) . '.php';
    require_once $classname;
}

spl_autoload_register('micargador');
            
?>
