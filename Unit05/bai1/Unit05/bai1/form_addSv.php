<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <form class="row g-3" action="add_profile.php" method="post">
<div class="col-md-4">
  <label for="validationDefault01" class="form-label">Họ Tên</label>
  <input type="text" class="form-control" id="validationDefault01" name="name" required>
</div>
<div class="col-md-12">
  <label for="validationDefault02" class="form-label">Giới tính</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="GioiTinh" id="flexRadioDefault1" value="Nam" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Nam
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="GioiTinh" id="flexRadioDefault2" value="Nữ name="ngoaiNgu"" >
  <label class="form-check-label" for="flexRadioDefault2">
    Nữ
  </label>
</div>
<div class="col-md-4">
  <label for="validationDefaultUsername" class="form-label">Ngày tháng năm sinh</label>
  <div class="input-group">
    <input type="text" name="NamS" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
  </div>
</div>
</div>

<div class="col-md-4">
  <label for="validationDefault03" class="form-label">Quê quán</label>
  <input type="text" name="que" class="form-control" id="validationDefault03" required>
</div>
<div class="col-md-12">
  <label for="validationDefault04" class="form-label">Ngoại ngữ</label>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="Tiếng Anh" id="flexCheckDefault" name="ngoaiNgu[]">
    <label class="form-check-label" for="flexCheckDefault">
      Tiếng Anh
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="Tiếng Nhật" id="flexCheckChecked" name="ngoaiNgu[]">
    <label class="form-check-label" for="flexCheckChecked">
      Tiếng Nhật
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="Tiếng Pháp" id="flexCheckChecked" name="ngoaiNgu[]">
    <label class="form-check-label" for="flexCheckChecked">
      Tiếng Pháp
    </label>
  </div>
</div>
<div class="col-md-4">
  <textarea name="info" rows="6" cols="50">Thông tin thêm</textarea>
</div>


<div class="col-12">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
    <label class="form-check-label" for="invalidCheck2">
      Agree to terms and conditions
    </label>
  </div>
</div>
<div class="col-12">
  <button class="btn btn-primary" type="submit">Submit form</button>
</div>
</form>
    </div>
</body>
</html>
