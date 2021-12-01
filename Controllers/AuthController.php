<?php
require_once 'Core/BaseController.php';
require_once 'Models/UserModel.php';

class AuthController extends BaseController {
  private $user;

  public function __construct() {
    $this->user = new UserModel();
  }

  public function signup() {
    $this->view("auth/signup");
  }

  public function store() {
    $this->redirect("Product", "index");
    if(isset($_POST["name"])) {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $avatar = "hola"; 
      $this->user->save($name, $email, $password, $avatar);
    }
  }

  public function login() {
    $this->view("auth/login");
  }

  public function check() {
    if(isset($_POST["email"])) {
      $email = $_POST["email"];
      $password = $_POST["password"];
      if($this->user->registered($email, $password) > 0) {
        $this->redirect("Product", "index");
      } else {
        $this->redirect("Auth", "login");
      }
    }
  }
}
?>
