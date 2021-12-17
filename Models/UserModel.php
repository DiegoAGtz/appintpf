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
      return $id;
    }
    return -1;
  }

  public function registered($email, $password) {
    if ($stmt = $this->db->prepare("SELECT id FROM users WHERE email = ? AND password = ?")) {
      $stmt->bind_param("ss", $email, $password);
      $stmt->execute();
      $stmt->bind_result($id);
      $stmt->fetch();
      $stmt->close();
      return $id;
    }
    return -1;
  }

  public function change($photo, $id) {
    if($stmt = $this->db->prepare("UPDATE users SET avatar = ? WHERE id = ?")) {
      $stmt->bind_param("si", $photo, $id);
      $id_modified = $stmt->execute();
      $stmt->close();
      return $id_modified;
    }
    return -1;
  }

}

?>
