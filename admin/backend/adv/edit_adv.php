<?php
					include "../config.php";
					$sql = "select * from tbl_adv where pk_adv_id = '$_GET[id]' ";
					$result = mysqli_query($con,$sql);
					$row_adv = mysqli_fetch_array($result);


									if(isset($_POST["process"]))
									{
										$c_name = mysqli_escape_string($con,$_POST["c_name"]);
										$c_hotadv = mysqli_escape_string($con,$_POST["c_hotadv"]);
										$img = $_FILES['c_img']['name'];
										if($img != NULL){

																$path = "backend/adv/upload/";
																$tmp_name = $_FILES['c_img']['tmp_name'];
																$name = $_FILES['c_img']['name'];

																// Upload file
																move_uploaded_file($tmp_name,$path.$name);
											$sql = "update tbl_adv set c_img = '$img' where pk_adv_id='$_GET[id]'";
											mysqli_query($con,$sql);
											header('location:admin.php?quanly=adv');
															}
										$sql = "update tbl_adv set c_name='$c_name',c_hotadv='$c_hotadv' where pk_adv_id='$_GET[id]'";
									 	mysqli_query($con,$sql);
										header('location:admin.php?quanly=adv');
								}

 ?>


<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">edit adv</div>
		<div class="panel-body">
			<form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="process">
				<div class="form-group">
					<label class="col-md-2">Name</label>
					<div class="col-md-10">
					<input type="text" value="<?php echo $row_adv['c_name']; ?>" name="c_name" required class="form-control">
					</div>
				</div>

        <div class="form-group">
					<label class="col-md-2">c_url</label>
					<div class="col-md-10">
					<input type="text" value="<?php echo $row_adv['c_url']; ?>" name="c_url" required class="form-control">
					</div>
				</div>

				<div class="form-group">
				<label class="col-md-2"> Hot</label>
					<div class="col-md-10">
					<input type="number" value="<?php echo $row_adv['c_hotadv']; ?>" name="c_hotadv" required class="form-control" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2"></label>
					<div class="col-md-10">
					<input type="file" name="c_img">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2"></label>
					<div class="col-md-10">
					<img src="backend/adv/upload/<?php echo $row_adv['c_img']; ?>" style="max-width: 100px;">
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
