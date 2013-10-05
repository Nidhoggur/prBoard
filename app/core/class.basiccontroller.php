<?php

abstract class BasicController {

    protected $model;
    protected $view;

    protected function __construct() {
        $this->view = View();
    }

    abstract public function index();
}