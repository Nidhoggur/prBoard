<?php

class basicModel {
    protected $dbHandler = NULL;
    
    protected function __construct() {
        $this->dbHandler = new mysqlBike;
    }
    
}