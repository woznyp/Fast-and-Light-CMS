<?php

/**
 * This is main page
 */

try{
    
    require_once(__DIR__ . '/tools/RequireManager.php');
    RequireManager::main();
    RequireManager::requireClass('MainController', 'require_once');
    RequireManager::requireClass('MainView', 'require_once');
    $mainController = new MainController();
    $mainView = new MainView($mainController->date);
    
} catch (Exception $exception){
    
    echo $exception->getMessage()."\n<br>";
    echo $exception->getFile()."\n<br>";
    echo $exception->getLine()."\n<br>";
    
}

