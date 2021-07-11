<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="../add_product.php" method="POST" role="form">
          <br>
            <legend>Thêm sản phẩm vào kho hàng</legend>
            <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" class="form-control" name="maSP">
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="tenSP">
            </div>
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" class="form-control" name="soLuong">
            </div>
            <div class="form-group">
                <label for="">Giá bán</label>
                <input type="number" class="form-control" name="giaBan">
            </div>
            <div class="form-group">
                <label for="">Link ảnh sản phẩm</label>
                <input type="text" class="form-control" name="images">
            </div>
            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </form>
    </div>
</body>
</html>
