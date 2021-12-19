<?php
require_once 'Core/BaseModel.php';

class ProductModel extends BaseModel {

  public function __construct() {
    parent::__construct("products");
  }

  public function all() {
    if ($stmt = $this->db->prepare("SELECT * FROM products WHERE state=1 ORDER BY id DESC")) {
      $stmt->execute();
      $result = $stmt->get_result();
      $resultSet = null;
      while ($row = $result->fetch_assoc()) {
        $resultSet[] = $row;
      }
      $stmt->close();
      return $resultSet;
    }
    return 0;
  }

  public function delete($id) {
    $query = $this->db->query("UPDATE products SET state=0 WHERE id = $id");
    return $query;
  }

  public function where($column, $value) {
    $query = $this->db->query("SELECT * FROM products WHERE $column = '$value' AND state=1 ORDER BY id DESC");
    $resultSet = null;
    while($row  =  $query->fetch_assoc()) {
      $resultSet[] = $row;
    }
    return $resultSet;
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

  public function find($id) {
    if ($stmt = $this->db->prepare("SELECT p.*, u.name as username
      FROM products p 
      INNER JOIN users u
      ON u.id = p.user_id
      WHERE p.id=?")) {
      $stmt->bind_param("i", $id);
      $stmt->execute();
      $result = $stmt->get_result();
      $resultSet = null;
      while ($row = $result->fetch_assoc()) {
        $resultSet = $row;
      }
      $stmt->close();
      return $resultSet;
    }
    return 0;
  }

}

?>
