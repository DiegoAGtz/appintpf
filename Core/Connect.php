<?php

class Connect {

  public function connection() {
    $conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die('Error de Conexión (' . $conn->connect_errno . ') ' . $conn->connect_error);
    }
    $conn->set_charset("utf8");
    return $conn;
  }

}
?>
