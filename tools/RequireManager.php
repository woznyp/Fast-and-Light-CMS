<?php

class RequireManager{
    public static function main() {
        require_once(__DIR__ . '/usefulFunctions.php');
        require_once(__DIR__ . '/../configuration/Configuration.php');
    }
    /**
     * Allows to require or include class file
     * @param String $className - name of required class from Fast and Light CMS
     * @param String $mode - [include,include_once,require,require_once]
     * 
     */
    public static function requireClass($className, $mode){
        $mode = isInArray($mode, Configuration::$modes);
        if (!$mode){
            throw new Exception('This mode doesn`t exist in Configuration class');
        }
        
        $className = isInArray($className, Configuration::$classes);
        if (!$className){
            throw new Exception('This class doesn`t exist in Configuration class');
        }
    }
    
    /**
     * Allows to require or include file
     * @param String $fileName - name of required file from Fast and Light CMS
     */
    public static function requireFile($fileName){
        
    }
}