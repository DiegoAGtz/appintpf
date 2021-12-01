<?php

class URL {
    public static function get($controller = DEFAULT_CONTROLLER, $action = DEFAULT_ACTION, $params = array()){
        $urlString = "index.php?controller=$controller&action=$action";
        foreach ($params as $id_assoc => $value) {
            ${$id_assoc} = $value;
            $urlString .= "&$id_assoc=$value";
        }
        return $urlString;
    }

    public static function file($filename) {
        $filePath = "Storage/$filename";
        if(is_file($filePath)){
            return $filePath;
        }
        return '';
    }
}

?>
