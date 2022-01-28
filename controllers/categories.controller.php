<?php
class CategoriesController
{
  public static function findAll()
  {
    $categories = new CategoriesModel();
    return $categories->findAll();
  }

  public static function save()
  {
    if (isset($_POST['btnCreate'])) {
      $data = array(
        'description' => $_REQUEST['description']
      );
      $categories = new CategoriesModel();
      $res = $categories->save($data);

      echo "<script>window.location = 'categories';</script>";
    }
  }

  public static function edit()
  {
    if (isset($_POST['btnEdit'])) {
      $data = array(
        'id' => $_REQUEST['idCategorie'],
        'description' => $_REQUEST['description']
      );
      $categories = new CategoriesModel();
      $res = $categories->edit($data);

      echo "<script>window.location = 'categories';</script>";
    }
  }

  public static function delete()
  {
    if (isset($_POST['btnDelete'])) {
      $id = $_REQUEST['idCategorie'];
      $categories = new CategoriesModel();
      $res = $categories->delete($id);

      echo "<script>window.location = 'categories';</script>";
    }
  }
}