<?php
  require_once('Connection.php');
  class Post{
    var $conn;
    function __construct(){
      $obj = new Connection();
      $this->conn = $obj->conn;
    }

    function getAll(){
      $sql = "SELECT * FROM posts";
      $results = $this->conn->query($sql);
      $posts = array();

      while($row = $results->fetch_assoc()){
        $posts[] = $row;
      }
      return $posts;
    }

    function find($id){
      $sql = "SELECT * FROM posts WHERE id = ".$id;
      return $this->conn->query($sql)->fetch_assoc();
    }

    function getCategoriesId(){
        $sql = "SELECT * FROM categories";
        $results = $this->conn->query($sql);
        $categories = array();
        while($row = $results->fetch_assoc()){
          $categories[] = $row;
        }
        return  $categories;
    }

    function insert($data){
      require_once('conmon.php');
      $upload = uploadFile('thumbnail', 'publics/img',array('jpg','jpeg','png','gif'), 1, true);
      $_SESSION['upload_status'] = $upload;
      if (isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0]==true && isset($data)) {
        if (isset($data['category_id']) && $data['category_id']!=0) {
          $sql = "INSERT INTO posts (title, short_content, slug, thumbnail, category_id, content) VALUES ('".$data['title']."','".$data['short_content']."','".create_slug($data['title'])."','".$upload[1]."','".$data['category_id']."','".$data['content']."')";
          return $this->conn->query($sql);
        }elseif($data['parent_id']==0){
          $sql = "INSERT INTO posts (title, short_content, slug, thumbnail, content) VALUES ('".$data['title']."','".$data['short_content']."','".create_slug($data['title'])."','".$upload[1]."','".$data['content']."')";
          return $this->conn->query($sql);
        }
      }else {
        if (isset($data['category_id']) && $data['category_id']!=0) {
          $sql = "INSERT INTO posts (title, short_content, slug, category_id, content) VALUES ('".$data['title']."','".$data['short_content']."','".create_slug($data['title'])."','".$data['category_id']."','".$data['content']."')";
          return $this->conn->query($sql);
        }elseif($data['category_id']==0){
          $sql = "INSERT INTO posts (title, short_content, slug, content) VALUES ('".$data['title']."','".$data['short_content']."','".create_slug($data['title'])."','".$data['content']."')";
          return $this->conn->query($sql);
        }
      }
    }

    function update($data){
      require_once('conmon.php');
      echo "<pre>";
       print_r($data);
      echo "</pre>";
      $upload = uploadFile('thumbnail', 'publics/img',array('jpg','jpeg','png','gif'), 1, true);
      $_SESSION['upload_status'] = $upload;
      if (isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0]==true && isset($data)) {
        if (isset($data['category_id']) && $data['category_id']!=0) {
          $sql = "UPDATE posts SET title ='".$data['title']."' ,slug ='".create_slug($data['title'])."' ,short_content='".$data['short_content']."' ,thumbnail='".$upload[1]."' ,category_id='".$data['category_id']."',content='".$data['content']."' WHERE  id = ".$data['id'];
          return $this->conn->query($sql);
        }elseif($data['category_id']==0){
          $sql = "UPDATE posts SET title ='".$data['title']."' ,slug ='".create_slug($data['title'])."' ,short_content='".$data['short_content']."' ,thumbnail='".$upload[1]."',category_id= NULL ,content='".$data['content']."' WHERE  id = ".$data['id'];
          return $this->conn->query($sql);
        }
      }else {
        if (isset($data['category_id']) && $data['category_id']!=0) {
          $sql = "UPDATE posts SET title ='".$data['title']."' ,slug ='".create_slug($data['title'])."' ,short_content='".$data['short_content']."' ,category_id='".$data['category_id']."',content='".$data['content']."' WHERE  id = ".$data['id'];
          return $this->conn->query($sql);
        }elseif($data['category_id']==0){
          $sql = "UPDATE posts SET title ='".$data['title']."' ,slug ='".create_slug($data['title'])."' ,short_content='".$data['short_content']."' ,category_id= NULL,content='".$data['content']."' WHERE  id = ".$data['id'];
          return $this->conn->query($sql);
        }
      }
    }
    function delete($id){
      $sql= "DELETE FROM posts WHERE id =".$id;
      return $this->conn->query($sql);
    }
  }

 ?>
