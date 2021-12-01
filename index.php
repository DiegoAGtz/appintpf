<?php

require_once 'Core/Config.php';
require_once 'Core/Helpers.php';
 
function loadController($controller){
    $controller = ucwords($controller).'Controller';
    $controllerFile = 'Controllers/'.$controller.'.php';
     
    if(!is_file($controllerFile)){
        $controllerFile = 'Controllers/'.ucwords(DEFAULT_CONTROLLER).'Controller.php';  
    }
     
    require_once $controllerFile;
    $controllerObj = new $controller();
    return $controllerObj;
}
 
function loadAction($controllerObj, $action){
    $execute = $action;
    $controllerObj->$execute();
}
 
function executeAction($controllerObj){
    if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
        loadAction($controllerObj, $_GET["action"]);
    }else{
        loadAction($controllerObj, DEFAULT_ACTION);
    }
}

if(isset($_GET["controller"])){
    $controllerObj = loadController($_GET["controller"]);
    executeAction($controllerObj);
}else{
    $controllerObj = loadController(DEFAULT_CONTROLLER);
    executeAction($controllerObj);
}

?>
