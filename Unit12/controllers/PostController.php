<?php
  require_once('models/Post.php');
  require_once('models/Category.php');
  class PostController{

    function list(){
      $model = new Post();
      $posts  = $model->getAll();
      require_once('views/post/list.php');
    }

    function detail(){
      $model = new Post();
      $id = $_GET['id'];
      $posts = $model->find($id);
      require_once('views/post/detail.php');
    }

    function create(){
      $model = new Post();
      $categories = $model->getCategoriesId();
      require_once('views/post/add.php');
    }

    function store(){
      $data = $_POST;
      $model = new Post();
      $status = $model->insert($data);
      if ($status==true) {
        header('Location: index.php?mod=post&act=list');
      }
    }
    function edit(){
      $id = $_GET['id'];
      $model = new Post();
      $model_cate = new Category();
      $post = $model->find($id);
      $posts  = $model->getAll();
      $categories  = $model_cate->getAll();
      require_once('views/post/edit.php');
    }
    function update(){
      $data =$_POST;
      $model = new Post();
      $status = $model->update($data);
      if ($status==true) {
        header('Location: index.php?mod=post&act=list');
      }
    }
    function delete(){
      $id = $_GET['id'];
      $model = new Post();
      $status = $model->delete($id);
      if ($status==true) {
        header('Location: index.php?mod=post&act=list');
      }
    }
  }
 ?>
