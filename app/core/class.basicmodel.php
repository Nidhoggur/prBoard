<?php

class BasicModel {

    protected $dbHandler = NULL;

    protected function __construct() {
        $this->dbHandler = new MysqlBike;
    }

}