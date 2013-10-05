<?php

define('DIRSEP', DIRECTORY_SEPARATOR);
define('ROOTDIR', realpath(dirname(__FILE__)) . DIRSEP);
define('APPDIR', ROOTDIR . 'app' . DIRSEP);
define('COREDIR', APPDIR . 'core' . DIRSEP);
define('CTRLDIR', APPDIR . 'controller' . DIRSEP);
define('MODELDIR', APPDIR . 'model' . DIRSEP);
define('VIEWDIR', APPDIR . 'view' . DIRSEP);

include_once (COREDIR . 'core.php');
?>