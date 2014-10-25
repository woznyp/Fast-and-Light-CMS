<?php

/**
 * This is main page
 */

try{
    require_once(__DIR__ . '/tools/RequireManager.php');
    RequireManager::main();
} catch (Exception $exception){
    echo $exception->getMessage()."\n<br>";
    echo $exception->getFile()."\n<br>";
    echo $exception->getLine()."\n<br>";
}

