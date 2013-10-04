<?php

class prChan {

    const AUTHOR = '!E4iX5FPygE!!58vu8eH8';

    final public static function init($mode) {
        if ($mode == 'indev') {
            ini_set('display_errors', 1);
            error_reporting('E_ALL');
        }
        
        Router::route(new Request);
    }

}

?>