<?php
					include "../config.php";
					$sql = "select * from tbl_news where pk_news_id = '$_GET[id]' ";
					$result = mysqli_query($con,$sql);
					$row_news = mysqli_fetch_array($result);


									if(isset($_POST["process"]))
									{
										$c_name = mysqli_escape_string($con,$_POST["c_name"]);
										$c_hotnews = mysqli_escape_string($con,$_POST["c_hotnews"]);
										$c_description = mysqli_escape_string($con,$_POST["c_description"]);
										$c_content = mysqli_escape_string($con,$_POST["c_content"]);
										$img = $_FILES['c_img']['name'];
										if($img != NULL){


																$path = "backend/news/upload/";
																$tmp_name = $_FILES['c_img']['tmp_name'];
																$name =  $_FILES['c_img']['name'];

																move_uploaded_file($tmp_name,$path.$name);
																$sql = "update tbl_news set c_img = '$img' where pk_news_id='$_GET[id]'";
																mysqli_query($con,$sql);

													}
										$sql = "update tbl_news set c_name='$c_name',c_hotnews='$c_hotnews',c_description='$c_description',c_content='$c_content' where pk_news_id='$_GET[id]'";
									 	mysqli_query($con,$sql);
										header('location:admin.php?quanly=news');
								}

 ?>


<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">edit news</div>
		<div class="panel-body">
			<form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="process">
				<div class="form-group">
					<label class="col-md-2">Name</label>
					<div class="col-md-10">
					<input type="text" value="<?php echo $row_news['c_name']; ?>" name="c_name" required class="form-control">
					</div>
				</div>

				<div class="form-group">
				<label class="col-md-2"> Hot</label>
					<div class="col-md-10">
					<input type="number" value="<?php echo $row_news['c_hotnews']; ?>" name="c_hotnews" required class="form-control" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2">Description</label>
					<div class="col-md-10">
					<textarea name="c_description">
						<?php echo $row_news['c_description']; ?>
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
						<?php echo $row_news['c_content']; ?>
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
					<img src="backend/news/upload/<?php echo $row_news['c_img']; ?>" style="max-width: 100px;">
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
