<?php

function __autoload($className) {
    $classFile = COREDIR . 'class.' . strtolower($className) . '.php';

    if (is_readable($classFile)) {
        include_once $classFile;
    } else {
        die('Invalid class name ' . $className);
    }
}

spl_autoload_register('__autoload');

// Поехали
PrChan::init('indev');
?>