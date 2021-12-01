<?php

class URL {

    public static function get($controller = DEFAULT_CONTROLLER, $action = DEFAULT_ACTION){
        $urlString = "index.php?controller=" . $controller . "&action=" . $action;
        return $urlString;
    }

}

?>
