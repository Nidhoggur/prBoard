<?php

class prChan {

    const AUTHOR = NULL;

    final public static function init($mode) {
        if ($mode == 'indev') {
            ini_set('display_errors', 1);
            error_reporting('E_ALL');
        }
        
        Router::route(new Request);
    }

}

?>