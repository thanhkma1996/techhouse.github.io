
 <?php
   include "../config.php";
  $sotin1trang = 3;
  if( isset($_GET["trang"]) ){
 	$trang = $_GET["trang"];
 	settype($trang, "int");
 }else{
 	$trang = 1;
 }

 	$from = ($trang - 1 ) * $sotin1trang;
 	if($from<0) $from=0;

  $qr =( "select *,tbl_category_product.c_name as 'a' from tbl_category_product,tbl_product where tbl_category_product.pk_category_product_id = tbl_product.fk_category_product_id limit $from, $sotin1trang");
 	$ds = mysqli_query($con,$qr);
   $x = mysqli_query($con,"select pk_product_id from tbl_product");
   $tongsotin = mysqli_num_rows($x);
   $sotrang = ceil($tongsotin / $sotin1trang);

  ?>

<div class="col-md-10 col-md-offset-1">
	<div style="margin-bottom: 5px;"><a href="admin.php?quanly=add_product" class="btn btn-primary">Add</a></div>
	<div class="panel panel-primary">
		<div class="panel-heading">product</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th style="width: 100px;">Ảnh</th>
					<th>Tiêu đề</th>
					<th style="width: 200px;">Danh mục sản phẩm</th>
					<th style="width: 100px;">Tin nổi bật</th>
					<th style="width: 100px;"></th>
				</tr>
				<?php
						while($row = mysqli_fetch_array($ds))
						{
				 ?>
				<tr>
					<td style="text-align: center;">
						<img src="backend/product/upload/<?php echo $row['c_img']; ?>" style="max-width: 100px;">
					</td>
					<td><?php echo $row['c_name']; ?></td>
					<td style="text-align: center;">
						<?php echo $row['a'];  ?>
					</td>
					<td style="text-align: center;">
								<?php if($row['c_hotproduct'] == 1)
								 { ?>
								<span class="glyphicon glyphicon-check"></span>
							<?php } ?>
					</td>
					<td style="text-align: center;">
						<a  href="admin.php?quanly=edit_product&id=<?php echo $row['pk_product_id'];  ?>">Edit</a>&nbsp;&nbsp;
						<a onclick="return window.confirm('Bạn muốn xóa không');" href="admin.php?quanly=delete_product&id=<?php echo $row['pk_product_id']; ?>">Delete</a>
					</td>
				</tr>
				 <?php } ?>
			</table>
			<ul class="pagination" style="padding:0px; margin:0px;">
				<li><a href="#">Trang</a></li>
				<?php

							for($t=1; $t<=$sotrang; $t++){
				?>
				<li><a href="admin.php?quanly=product&trang=<?php echo $t; ?>"><?php echo $t ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
