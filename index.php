<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php include './components/bootstrap.php'?>
  <?php include './components/plugins.php'?>
  <title>Login - Porn</title>
</head>

<body>

    <div class="container" style="padding: 50px;">
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Enter Username">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" id="password" class="form-control" placeholder="Enter Password">
      </div>

      <button onclick="actionLogin()" class="btn btn-primary">เข้าสู่ระบบ</button>
      <a href="register.php"><button class="btn btn-success">สมัครสมาชิก</button></a>
    </div>


</body>

</html>
<script src="./provider/app.js"></script>