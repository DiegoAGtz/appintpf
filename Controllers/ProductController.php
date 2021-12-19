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
    if(isset($_POST["name"])){
      $name = $_POST["name"];
      $price = $_POST["price"];
      $description = $_POST["description"];
      $product = $this->product->save(Auth::info()['id'], $name, $price, $description);
      if(isset($_FILES['image'])) {
        $dir_subida = 'Storage/Products/';
        $date = new Datetime();
        $newImage = $date->getTimestamp() . '-' . basename($_FILES['image']['name']);
        $fichero_subido = $dir_subida . $newImage;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $fichero_subido)) {
          $this->product->changeImage($newImage, $product);
        }
      }
    }
    $this->redirect("Dashboard", "products");
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
    if(isset($_POST['id'])) {
      $this->product->change($_POST['id'], $_POST['name'], $_POST['description'], $_POST['price']);
      if(isset($_FILES['image'])) {
        $dir_subida = 'Storage/Products/';
        $date = new Datetime();
        $newImage = $date->getTimestamp() . '-' . basename($_FILES['image']['name']);
        $fichero_subido = $dir_subida . $newImage;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $fichero_subido)) {
          $this->product->changeImage($newImage, $_POST['id']);
        }
      }
    }
    $this->redirect('Dashboard', 'products');
  }

  public function destroy() {
    if(isset($_POST["id"])){
      $this->product->delete($_POST["id"]);
    }
    $this->redirect('Dashboard', 'products');
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
