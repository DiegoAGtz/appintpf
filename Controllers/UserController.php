<?php
require_once 'Core/BaseController.php';
require_once 'Models/UserModel.php';

class UserController extends BaseController {

  private $user;

  public function __construct() {
    $this->user = new UserModel();
  }

  public function index() {
    $users = $this->user->all();
    $this->view("profile/users", array(
      "users" => $users,
    ));
  }

  public function show() {
    if(isset($_GET["id"])){
      $this->view("profile/index", array(
        "user" => $this->user->find($_GET["id"])
      ));
    }else{
      $this->index();
    }
  }

  public function edit() {

  }

  public function update() {
    $dir_subida = 'Storage/Avatars/';
    $date = new Datetime();
    $filename = $date->getTimestamp() . '-' . basename($_FILES['avatar']['name']);
    $fichero_subido = $dir_subida . $filename;
    
    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $fichero_subido)) {
        $this->user->change($filename, Auth::info()['id']);
        echo "El fichero es válido y se subió con éxito.\n";
    } else {
        echo "¡Posible ataque de subida de ficheros!\n";
    }
  }

  public function destroy() {
    $this->redirect("User", "index");
    if(isset($_GET["id"])){
      $this->user->delete($_GET["id"]);
    }else{
      $this->index();
    }
  }

}
?>
