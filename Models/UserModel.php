<?php
require_once 'Core/BaseModel.php';

class UserModel extends BaseModel {

  public function __construct() {
    parent::__construct("users");
  }

  public function save($name, $email, $password, $avatar) {
    if ($stmt = $this->db->prepare("INSERT INTO users(name, email, password, avatar) VALUES (?, ?, ?, ?)")) {
      $stmt->bind_param("ssss", $name, $email, $password, $avatar);
      $stmt->execute();
      $id = $stmt->insert_id;
      $stmt->close();
      return id;
    }
  }

}

?>
