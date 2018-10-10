<?php
			include "../config.php";
			$sql = "select*from tbl_category_product where pk_category_product_id='$_GET[id]'";
			$result = mysqli_query($con,$sql);
			$row_category = mysqli_fetch_array($result);


				if(isset($_POST["process"]))
				{
					$c_name = $_POST["c_name"];
          $c_home = $_POST["c_home"];
					$sql = "update tbl_category_product set c_name='$c_name',c_home = '$c_home' where pk_category_product_id='$_GET[id]'";
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
					<input type="text" value="<?php echo $row_category['c_name']; ?>" name="c_name" required class="form-control">
					</div>
				</div>

        <div class="form-group">
        <label class="col-md-2"> Hot</label>
          <div class="col-md-10">
          <input type="number" value="<?php echo $row_category['c_home']; ?>" name="c_home" required class="form-control" >
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
