<?php
require_once 'Core/BaseModel.php';

class ProductModel extends BaseModel {

  public function __construct() {
    parent::__construct("products");
  }

  public function save($id, $name, $price, $description) {
    if ($stmt = $this->db->prepare("INSERT INTO products(user_id, name, price, description) VALUES (?, ?, ?, ?)")) {
      $stmt->bind_param("isss", $id, $name, $price, $description);
      $stmt->execute();
      return $stmt->insert_id;
    }
  }

  public function changeImage($newImage, $id) {
    if($stmt = $this->db->prepare("UPDATE products SET image=? WHERE id=?")) {
      $stmt->bind_param("si", $newImage, $id);
      $id_modified = $stmt->execute();
      $stmt->close();
      return $id_modified;
    }
    return -1;
  }

  public function change($id, $name, $description, $price) {
    if($stmt = $this->db->prepare("UPDATE products SET name=?, description=?, price=? WHERE id=?")) {
      $stmt->bind_param("ssdi", $name, $description, $price, $id);
      $id_modified = $stmt->execute();
      $stmt->close();
      return $id_modified;
    }
    return -1;
  }

}

?>
