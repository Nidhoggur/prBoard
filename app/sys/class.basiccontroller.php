<?php

abstract class basicController {

    var $model;
    var $view;
    
    protected function __construct() {
        $this->view = View();
    }

    abstract public function index();
}