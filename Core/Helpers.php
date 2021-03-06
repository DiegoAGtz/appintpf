<?php
require_once 'Models/UserModel.php';
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

class Auth {
    public static function loggedIn() {
        if (isset($_SESSION[SESSION_NAME])) {
            return true;
        } else {
            return false;
        }
    }

    public static function info() {
        $user = new UserModel();
        return $user->find($_SESSION[SESSION_NAME]);
    }
}

class Str {
    public static function truncate($str, $length) {
        if(strlen($str) < $length - 3) {
            return $str;
        } else {
            return mb_substr($str, 0, $length - 3, 'UTF-8') . '...';
        }
    }
}
?>
