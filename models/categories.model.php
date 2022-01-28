<?php
require 'connection.php';

class CategoriesModel {
  function __construct(){
    $this->table = 'Categories';
  }

  public function findAll(){
    $con = Connection::connect()->prepare("SELECT * FROM $this->table");
    $con->execute();
    $res = $con->fetchAll();
    $con = null;
    return $res;
  }

  public function save($data){
    $con = Connection::connect()->prepare("INSERT INTO $this->table (description) VALUES (:description)");
    $con->bindParam(':description', $data['description'], PDO::PARAM_STR);
    $res = $con->execute();
    $con = null;
    return $res ? true : false;
  }

  public function edit($data){
    $con = Connection::connect()->prepare("UPDATE $this->table SET description = :description WHERE id = :id");
    $con->bindParam(':id', $data['id'], PDO::PARAM_INT);
    $con->bindParam(':description', $data['description'], PDO::PARAM_STR);
    $res = $con->execute();
    $con = null;
    return $res ? true : false;
  }

  public function delete($id){
    $con = Connection::connect()->prepare("DELETE FROM $this->table WHERE id = :id");
    $con->bindParam(':id', $id, PDO::PARAM_INT);
    $res = $con->execute();
    $con = null;
    return $res ? true : false;
  }
}