<?php
  require_once('models/Category.php');
  class CategoryController{
    function list(){
      $model = new Category();
      $categories  = $model->getAll();
      require_once('views/category/list.php');
    }
    function detail(){
      $id = $_GET['id'];
      $model = new Category();
      $category = $model->find($id);
      require_once('views/category/detail.php');
    }
    function create(){
      $model = new Category();
      $categories = $model->getParentId();
      require_once('views/category/add.php');
    }
    function store(){
      session_start();
        if ($_POST['name']!='' && $_POST['description']!='') {
          $data = $_POST;
          $model = new Category();
          $status = $model->insert($data);
          if ($status==true) {
            $_SESSION['notification']='
              toast({
       					title: "Thành công!",
       					message: "Tạo mới thành công.",
       					type: "success",
       					duration: 5000
       				});';
            header('Location: index.php?mod=category&act=list');
          }else {
            $_SESSION['notification']='
              toast({
       					title: "Thất bại!",
       					message: "Tạo mới thất bại.",
       					type: "error",
       					duration: 5000
       				});';
                header('Location: index.php?mod=category&act=create');
          }
        }else {
          $_SESSION['notification']='
            toast({
              title: "Thất bại!",
              message: "Tạo mới thất bại.",
              type: "error",
              duration: 5000
            });';
              header('Location: index.php?mod=category&act=create');
        }
    }

    function edit(){
      $id = $_GET['id'];
      $model = new Category();
      $category = $model->find($id);
      $categories  = $model->getAll();
      require_once('views/category/edit.php');
    }
    function update(){
      session_start();
      if ($_POST['name']!='' && $_POST['description']!='') {
        $data =$_POST;
        $model = new Category();
        $status = $model->update($data);
        if ($status==true) {
          $_SESSION['notification']='
            toast({
              title: "Thành công!",
              message: "Sửa thành công.",
              type: "success",
              duration: 5000
            });';
            header('Location: index.php?mod=category&act=list');
        }else {
          $_SESSION['notification']='
            toast({
              title: "Thất bại!",
              message: "Sửa thất bại.",
              type: "error",
              duration: 5000
            });';
              header('Location: index.php?mod=category&act=edit');
        }
      }else {
        $_SESSION['notification']='
          toast({
            title: "Thất bại!",
            message: "Sửa thất bại.",
            type: "error",
            duration: 5000
          });';
            header('Location: index.php?mod=category&act=edit');
      }
    }
    function delete(){
      session_start();
      $id = $_GET['id'];
      $model = new Category();
      $status = $model->delete($id);
      if ($status==true) {
        $_SESSION['notification']='
          toast({
            title: "Thành công!",
            message: "Xóa thành công.",
            type: "success",
            duration: 5000
          });';
        header('Location: index.php?mod=category&act=list');
      }else {
        $_SESSION['notification']='
          toast({
            title: "Thất bại!",
            message: "Xóa thất bại.",
            type: "error",
            duration: 5000
          });';
      }
    }

  }
 ?>
