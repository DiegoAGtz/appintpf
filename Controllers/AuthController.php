<?php
require_once 'Core/BaseController.php';
require_once 'Models/UserModel.php';

class AuthController extends BaseController {
  private $user;

  public function __construct() {
    $this->user = new UserModel();
  }

  public function signup() {
    if(Auth::loggedIn()) {
      $this->redirect("User", "show");
    } else {
      $this->view("auth/signup");
    }
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
    if(Auth::loggedIn()) {
      $this->redirect("User", "show");
    } else {
      $this->view("auth/login");
    }
  }

  public function check() {
    if(isset($_POST["email"])) {
      $email = $_POST["email"];
      $password = $_POST["password"];
      if($this->user->registered($email, $password) > 0) {
        $_SESSION[SESSION_NAME] = true;
        $this->redirect("Page", "index");
      } else {
        $this->redirect("Auth", "login");
      }
    }
  }

  public function logout() {
    unset($_SESSION[SESSION_NAME]);
    $this->redirect("Auth", "login");
  }
}
?>
