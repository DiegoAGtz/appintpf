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
    $newName = "";
    $newEmail = "";
    $newAvatar = ""; 
    if(isset($_POST['name'])) {
      if(isset($_FILES['avatar'])) {
        $dir_subida = 'Storage/Avatars/';
        $date = new Datetime();
        $newAvatar = $date->getTimestamp() . '-' . basename($_FILES['avatar']['name']);
        $fichero_subido = $dir_subida . $newAvatar;
        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $fichero_subido)) {
          $this->user->changeAvatar($newAvatar, Auth::info()['id']);
        }
      }

      if ($_POST['name'] != "") 
        $newName = $_POST['name'];
      else 
        $newName = Auth::info()['name'];

      if ($_POST['email'] != "") 
        $newEmail = $_POST['email'];
      else 
        $newEmail = Auth::info()['email'];

      $this->user->change($newName, $newEmail, Auth::info()['id']);
      if ($_POST['password'] != "") $this->user->changePassword($_POST['password'], Auth::info()['id']);

      $this->redirect('Dashboard', 'profile');
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
