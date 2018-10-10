<?php
					include "../config.php";
					$sql = "select * from tbl_product where pk_product_id = '$_GET[id]' ";
					$result = mysqli_query($con,$sql);
					$row_product = mysqli_fetch_array($result);


									if(isset($_POST["process"]))
									{
										$c_name = mysqli_escape_string($con,$_POST["c_name"]);
										$c_price = mysqli_escape_string($con,$_POST["c_price"]);
										$c_hotproduct = mysqli_escape_string($con,$_POST["c_hotproduct"]);
										$c_description = mysqli_escape_string($con,$_POST["c_description"]);
										$c_content = mysqli_escape_string($con,$_POST["c_content"]);
										$fk_category_product_id=mysqli_escape_string($con,$_POST["fk_category_product_id"]);
										$img = $_FILES['c_img']['name'];
										if($img != NULL){


																$path = "backend/product/upload/";
																$tmp_name = $_FILES['c_img']['tmp_name'];
																$name = $_FILES['c_img']['name'];

																move_uploaded_file($tmp_name,$path.$name);
																$sql = "update tbl_product set c_img = '$img' where pk_product_id='$_GET[id]'";
																mysqli_query($con,$sql);
																		header('location:admin.php?quanly=product');

													}
										$sql = "update tbl_product set c_name='$c_name',c_price='$c_price',c_hotproduct='$c_hotproduct',c_description='$c_description',c_content='$c_content',fk_category_product_id=$fk_category_product_id where pk_product_id='$_GET[id]'";
									 	mysqli_query($con,$sql);
										header('location:admin.php?quanly=product');
								}

 ?>


<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">edit product</div>
		<div class="panel-body">
			<form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="process">
				<div class="form-group">
					<label class="col-md-2">Name</label>
					<div class="col-md-10">
					<input type="text" value="<?php echo $row_product['c_name']; ?>" name="c_name" required class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2">Price</label>
					<div class="col-md-10">
					<input type="text" value="<?php echo $row_product['c_price']; ?>" name="c_price" required class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2">Category</label>
					<div class="col-md-10">
					<select name="fk_category_product_id">
					 <?php
					 	$sql_category = "select * from tbl_category_product ";
						$result = mysqli_query($con,$sql_category);

					 ?>
					 <?php
					 	while ($row = mysqli_fetch_array($result)) {
						 ?>
						<option  value="<?php echo $row['pk_category_product_id']; ?>"><?php echo $row['c_name']; ?></option>
						<?php } ?>
					</select>
					</div>
				</div>
				<div class="form-group">
				<label class="col-md-2"> Hot</label>
					<div class="col-md-10">
					<input type="number" value="<?php echo $row_product['c_hotproduct']; ?>" name="c_hotproduct" required class="form-control" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2">Description</label>
					<div class="col-md-10">
					<textarea name="c_description">
						<?php echo $row_product['c_description']; ?>
					</textarea>
					<script type="text/javascript">
						CKEDITOR.replace('c_description');
					</script>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2">Content</label>
					<div class="col-md-10">
					<textarea name="c_content">
						<?php echo $row_product['c_content']; ?>
					</textarea>
					<script type="text/javascript">
						CKEDITOR.replace('c_content');
					</script>
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
					<img src="backend/product/upload/<?php echo $row_product['c_img']; ?>" style="max-width: 100px;">
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
