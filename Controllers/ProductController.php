<?php
require_once 'Core/BaseController.php';
require_once 'Models/ProductModel.php';

class ProductController extends BaseController {

  private $product;

  public function __construct() {
    $this->product = new ProductModel();
  }

  public function index() {
    $this->view("index");
  }

  public function create() {
    $this->view("create");
  }

  public function store() {
    $this->redirect("Product", "index");
    if(isset($_POST["name"])){
      $name = $_POST["name"];
      $price = $_POST["price"];
      $description = $_POST["description"];
      $images = "images"; 
      $product = $this->product->save($name, $price, $description, $images);
    }
  }

  public function show() {
    if(isset($_GET["id"])){
      $this->view("profile", array(
        "product" => $this->product->find($_GET["id"])
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
    if(isset($_GET["id"])){
      $this->user->delete($_GET["id"]);
    }else{
      $this->index();
    }
  }

}
?>
