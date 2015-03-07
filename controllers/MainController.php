<?php

class MainController{
    private $dbConnector = '';
    
    /* testing */
    public $date;
    
    public function __construct() {
        $this->date = new DateTime();
    }
}