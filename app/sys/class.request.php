<?php

class Request {

    private $controller;
    private $method;
    private $args;

    function __construct() {
        // Парсим строку запроса
        $parts = explode('/', $_SERVER['REQUEST_URI']);
        $parts = array_filter($parts);

        $this->controller = strtolower(($c = array_shift($parts)) ? $c : 'index');
        $this->method = strtolower(($c = array_shift($parts)) ? $c : 'index');
        $this->args = (isset($parts[0])) ? $parts : array();
    }

    public function getController() {
        return $this->controller;
    }

    public function getMethod() {
        return $this->method;
    }

    public function getArgs() {
        return $this->args;
    }

}

?>