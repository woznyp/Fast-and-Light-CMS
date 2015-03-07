<?php
require_once(__DIR__ . '/../../tools/RequireManager.php');


/**
 * Uncomment return statements in functions in that class
 */
class RequireManagerTest extends PHPUnit_Framework_TestCase{
    public function __construct() {
        RequireManager::main();
    }
    
    /**
     * @expectedException Exception
     */
    public function testRequireClass1(){
        RequireManager::requireClass('test', 'test');
    }
    
    /**
     * @expectedException Exception
     */
    public function testRequireClass2(){
        RequireManager::requireClass('test', 'include');
    }
    
    /**
     * @expectedException Exception
     */
    public function testRequireClass3(){
        RequireManager::requireClass('MainView', 'test');
    }
    
    public function testRequireClass4(){
        $this->assertEquals('string',gettype(RequireManager::requireClass('MainView', 'require_once')));
    }
    
    /**
     * @expectedException Exception
     */
    public function testRequireClass5(){
        RequireManager::requireClass('MainControler', 'require_once');
    }
}