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
      $this->view("product/index", array(
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

  public function destroy() {
    if(isset($_GET["id"])){
      $this->user->delete($_GET["id"]);
    }else{
      $this->index();
    }
  }

  // API
  public function apiget() {
    header("Content-type: application/json");
    if(isset($_GET["id"])){
      echo json_encode($this->product->find($_GET["id"]));
    } else {
      echo json_encode(['error' => 'No se encontró el producto']);
    }
    exit;
  }

}
?>
