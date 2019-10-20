<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php include './components/bootstrap.php'?>
  <?php include './components/plugins.php'?>
  <title>Register - Porn</title>
</head>

<body>

  <div class="container" style="padding: 50px;">

      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input id="username" type="text" class="form-control" placeholder="Enter Username">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input id="password" type="password" class="form-control" placeholder="Enter Password">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">ชื่อจริง</label>
        <input id="name" type="text" class="form-control" placeholder="ชื่อจริง">
      </div>

      <button onclick="actionRegister()" class="btn btn-primary">สมัครสมาชิก</button>
      <a href="index.php"><button class="btn btn-success">ย้อนกลับ</button></a>

  </div>


</body>

</html>
<script src="./provider/app.js"></script>