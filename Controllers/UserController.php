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
    $this->view("index", array(
      "users" => $users,
      "msg" => "DiegoAGtz"
    ));
  }

  public function create() {
    $this->view("create", array(
      "msg" => "Hola desde el create"
    ));
  }

  public function store() {
    if(isset($_POST["name"])){
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $avatar = "hola"; 
      $userid = $this->user->save($name, $email, $password, $avatar);
    }
    $this->redirect("User", "index");
  }

  public function show() {
    if(isset($_GET["id"])){
      $this->view("profile", array(
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

  }

}
?>
