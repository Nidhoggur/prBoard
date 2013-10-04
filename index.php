<?php

define('DIRSEP', DIRECTORY_SEPARATOR);
define('ROOTDIR', realpath(dirname(__FILE__)) . DIRSEP);
define('APPDIR', ROOTDIR . 'app' . DIRSEP);
define('SYSDIR', APPDIR . 'sys' . DIRSEP);
define('CTRLDIR', APPDIR . 'controller' . DIRSEP);
define('MODELDIR', APPDIR . 'model' . DIRSEP);
define('VIEWDIR', APPDIR . 'view' . DIRSEP);

function __autoload($className) {
    $classFile = SYSDIR . 'class.' . strtolower($className) . '.php';

    if (is_readable($classFile)) {
        include_once $classFile;
    } else {
        die('Invalid class name ' . $className);
    }
}

spl_autoload_register('__autoload');


// Поехали
prChan::init('indev');
?>