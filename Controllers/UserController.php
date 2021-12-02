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

  }

  public function destoy() {
    $this->redirect("User", "index");
    if(isset($_GET["id"])){
      $this->user->delete($_GET["id"]);
    }else{
      $this->index();
    }
  }

}
?>
