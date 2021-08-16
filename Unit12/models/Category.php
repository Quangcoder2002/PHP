<?php
  // Model
  require_once('Connection.php');
  class Category{
    var $conn;

    function __construct(){
      $obj = new Connection();
      $this->conn = $obj->conn;
    }

    function getAll(){
      $sql = "SELECT * FROM categories";
      $results = $this->conn->query($sql);
      $categories = array();

      while($row = $results->fetch_assoc()){
        $categories[] = $row;
      }
      return $categories;
    }

    function find($id){
      $sql = "SELECT * FROM categories WHERE id = ".$id;
      return $this->conn->query($sql)->fetch_assoc();
    }

    function delete($id){
      $sql= "DELETE FROM categories WHERE id =".$id;
      return $this->conn->query($sql);
    }

    function insert($data){
      require_once('conmon.php');

      $upload = uploadFile('avatar', 'publics/img',array('jpg','jpeg','png','gif'), 1, true);
      $_SESSION['upload_status'] = $upload;
      if (isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0]==true && isset($data)) {
        if (isset($data['parent_id']) && $data['parent_id']!=0) {
          $sql = "INSERT INTO categories (cate_name, description, slug, cate_avatar, parent_id) VALUES ('".$data['name']."','".$data['description']."','".create_slug($data['name'])."','".$upload[1]."','".$data['parent_id']."')";
          return $this->conn->query($sql);
        }elseif($data['parent_id']==0){
          $sql = "INSERT INTO categories (cate_name, description, slug, cate_avatar) VALUES ('".$data['name']."','".$data['description']."','".create_slug($data['name'])."','".$upload[1]."')";
          return $this->conn->query($sql);
        }
      }else {
        if (isset($data['parent_id']) && $data['parent_id']!=0) {
          $sql = "INSERT INTO categories (cate_name, description, slug, parent_id) VALUES ('".$data['name']."','".$data['description']."','".create_slug($data['name'])."','".$data['parent_id']."')";
          return $this->conn->query($sql);
        }elseif($data['parent_id']==0){
          $sql = "INSERT INTO categories (cate_name, description, slug) VALUES ('".$data['name']."','".$data['description']."','".create_slug($data['name'])."')";
          return $this->conn->query($sql);
        }
      }
    }

    function getParentId(){
      $sql = "SELECT * FROM categories WHERE parent_id is Null";
      $results = $this->conn->query($sql);
      $categories = array();
      while($row = $results->fetch_assoc()){
        $categories[] = $row;
      }
      return  $categories;
    }
    function update($data){
      require_once('conmon.php');

      $upload = uploadFile('avatar', 'publics/img',array('jpg','jpeg','png','gif'), 1, true);
      $_SESSION['upload_status'] = $upload;

      if (isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0]==true && isset($data)) {
        if (isset($data['parent_id']) && $data['parent_id']!=0) {
          $sql = "UPDATE categories SET cate_name ='".$data['name']."' ,slug ='".create_slug($data['name'])."' ,description='".$data['description']."' ,cate_avatar='".$upload[1]."' ,parent_id='".$data['parent_id']."' WHERE  id = ".$data['id'];
          return $this->conn->query($sql);
        }elseif($data['parent_id']==0){
          $sql = "UPDATE categories SET cate_name ='".$data['name']."' ,slug ='".create_slug($data['name'])."' ,description='".$data['description']."' ,cate_avatar='".$upload[1]."',parent_id= NULL WHERE  id = ".$data['id'];
          return $this->conn->query($sql);
        }
      }else {
        if (isset($data['parent_id']) && $data['parent_id']!=0) {
          $sql = "UPDATE categories SET cate_name ='".$data['name']."' ,slug ='".create_slug($data['name'])."' ,description='".$data['description']."' ,parent_id='".$data['parent_id']."' WHERE  id = ".$data['id'];
          return $this->conn->query($sql);
        }elseif($data['parent_id']==0){
          $sql = "UPDATE categories SET cate_name ='".$data['name']."' ,slug ='".create_slug($data['name'])."' ,description='".$data['description']."',parent_id= NULL WHERE  id = ".$data['id'];
          return $this->conn->query($sql);
        }
      }
    }
  }

 ?>
