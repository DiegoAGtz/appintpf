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
    if(isset($_POST["name"])) {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $avatar = "hola"; 
      if ($this->user->save($name, $email, $password, $avatar) > -1)
        $this->check();
      else
        $this->view("auth/signup");
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
      $id = $this->user->registered($email, $password);
      if($id) {
        $_SESSION[SESSION_NAME] = $id;
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
