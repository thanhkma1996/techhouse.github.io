<?php
include "../config.php";
if (isset($_POST["login"])) {

	$user = $_POST["c_username"];
	$pass = md5($_POST["c_password"]);

	$sql = "select * from tbl_user where c_username = '$user' and c_password='$pass'";
	$row = mysqli_query($con,$sql);
	$count = mysqli_num_rows($row);
	if($count > 0)
	{
			session_start();
			$_SESSION["login"] = $user;
				header('location:admin.php');
	}
	else
			{
				echo '<script>alert("Tài khoản hoặc mật khẩu không đúng.Làm ơn đăng nhập lại.");</script>';
			}
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container-fluid" >
<div class="row-fluid">
<div class="col-md-offset-4 col-md-4" id="box">
 <h2>Quản trị website</h2>
 <hr>
 <form class="form-horizontal" action="login.php" method="post" >
	<fieldset>
		<!-- row -->
	 <div class="form-group">
		<div class="col-md-12">
		 <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input name="c_username" placeholder="Username" class="form-control" type="text">
		 </div>
		</div>
	 </div>
	 <!-- row -->
	 <div class="form-group">
		<div class="col-md-12">
		 <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> <input name="c_password" placeholder="Password" class="form-control" type="password">
		 </div>
		</div>
	 </div>
	 <!-- row -->
	 <div class="form-group">
		<div class="col-md-12">
		 <button type="submit" class="btn btn-md btn-danger pull-right" name="login">Đăng nhập </button>
		</div>
	 </div>

	</fieldset>
 </form>
</div>
</div>
</div>
</body>
</html>
