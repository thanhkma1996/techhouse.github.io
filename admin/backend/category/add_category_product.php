<?php
			include "../config.php";
			if(isset($_POST["process"]))
			{
					$c_name = mysqli_escape_string($con,$_POST["c_name"]);
          $c_home = mysqli_escape_string($con,$_POST["c_home"]);
					$sql = "insert into tbl_category_product(c_name,c_home) values('$c_name','$c_home')";
					mysqli_query($con,$sql);
					header('location:admin.php?quanly=category_product');
			}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>view_category_product</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
  </head>
  <body>
<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit category_product</div>
		<div class="panel-body">
			<form class="form-horizontal" method="post" action="" id="process">

          <div class="form-group">
            <label class="col-md-2">Name</label>
            <div class="col-md-10">
            <input type="text" value="" name="c_name" required class="form-control">
            </div>
          </div>

        <div class="form-group">
        <label class="col-md-2"> Hot</label>
          <div class="col-md-10">
          <input type="number" value="" name="c_home" required class="form-control" placeholder="Chỉ nhập 0 hoặc 1">
          </div>
        </div>

				<div class="form-group">
					<label class="col-md-2"></label>
					<div class="col-md-10">
					<input type="submit" value="Process" class="btn btn-primary" name="process">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
