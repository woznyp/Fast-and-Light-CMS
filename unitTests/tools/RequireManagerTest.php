<?php
require_once(__DIR__ . '/../../tools/RequireManager.php');

class RequireManagerTest{
    
    public function testRequireClass(){
        assert(RequireManager::requireClass('test', 'test') === Exception);
    }
}