<?php

class BaseController {

    public function view($view, $data = array()){
        foreach ($data as $id_assoc => $value) {
            ${$id_assoc} = $value;
        }
         
        require_once 'Views/'.$view.'.php';
    }
     
    public function redirect($controller = DEFAULT_CONTROLLER, $action = DEFAULT_ACTION){
        header("Location:index.php?controller=" . $controller . "&action=" . $action);
    }
     
}
?>
