<?php
					include "../config.php";
					$sql = "select * from tbl_slide where pk_slide_id = '$_GET[id]' ";
					$result = mysqli_query($con,$sql);
					$row_slide = mysqli_fetch_array($result);


									if(isset($_POST["process"]))
									{
										$c_name = mysqli_escape_string($con,$_POST["c_name"]);
										$c_hotslide = mysqli_escape_string($con,$_POST["c_hotslide"]);
										$img = $_FILES['c_img']['name'];
										if($img != NULL){

																$path = "backend/slide/upload/";
																$tmp_name = $_FILES['c_img']['tmp_name'];
																$name = $_FILES['c_img']['name'];

																// Upload file
																move_uploaded_file($tmp_name,$path.$name);
											$sql = "update tbl_slide set c_img = '$img' where pk_slide_id='$_GET[id]'";
											mysqli_query($con,$sql);
											header('location:admin.php?quanly=slide');
															}
										$sql = "update tbl_slide set c_name='$c_name',c_hotslide='$c_hotslide' where pk_slide_id='$_GET[id]'";
									 	mysqli_query($con,$sql);
										header('location:admin.php?quanly=slide');
								}

 ?>


<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">edit slide</div>
		<div class="panel-body">
			<form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="process">
				<div class="form-group">
					<label class="col-md-2">Name</label>
					<div class="col-md-10">
					<input type="text" value="<?php echo $row_slide['c_name']; ?>" name="c_name" required class="form-control">
					</div>
				</div>

				<div class="form-group">
				<label class="col-md-2"> Hot</label>
					<div class="col-md-10">
					<input type="number" value="<?php echo $row_slide['c_hotslide']; ?>" name="c_hotslide" required class="form-control" >
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
					<img src="backend/slide/upload/<?php echo $row_slide['c_img']; ?>" style="max-width: 100px;">
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
