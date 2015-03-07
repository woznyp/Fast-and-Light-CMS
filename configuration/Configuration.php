<?php

class Configuration{
    public static $classes = [
        "MainController" => "controllers/MainController.php",
        "MainView" => "views/MainView.php"
    ];
    
    public static $files = [
        
    ];
    
    public static $modes = [
        "include",
        "include_once",
        "require",
        "require_once"
    ];
}