<div class="col-md-10 col-xs-offset-1">
	<div style="margin-bottom: 5px;">
    <?php
         include("../config.php");
         $sql ="select * from tbl_order where order_id ='$_GET[order_id]'";
         $result = mysqli_query($con,$sql);
         $row = mysqli_fetch_array($result);
     ?>
	 <?php

		if($row["trangthai"] == 0)
		{
	 ?>
		<a href="admin.php?quanly=order_detail&id=<?php echo $row['order_id']; ?>" class="btn btn-primary">Giao hàng</a>&nbsp;
		<?php } ?>
		<a href="admin.php?quanly=order" class="btn btn-danger">Quay lại</a>&nbsp;
	</div>
	<?php
    $sql_detail = "select * from tbl_customer inner join tbl_order on  tbl_customer.customer_id = tbl_order.customer_id ";
    $result_detail = mysqli_query($con,$sql_detail);
    $customer = mysqli_fetch_array($result_detail);
	 ?>
	<div style="margin:bottom:5px;">Họ tên: <?php echo $customer['hovaten']; ?></div>
	<div style="margin:bottom:5px;">Địa chỉ: <?php echo $customer['diachi']; ?></div>
	<div style="margin:bottom:5px;">Điện thoại: <?php echo $customer['dienthoai']; ?></div>

	<div class="panel panel-primary">
		<div class="panel-heading">Chi tiết hoá đơn</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr style="background-color: black; color:white">
					<th style="width: 100px;">Ảnh</th>
					<th>Tên sản phẩm</th>
					<th style="width: 100px;">Giá</th>
					<th style="width: 100px;">Số lượng</th>
				</tr>
			 <?php
						//lay thong tin san pham
						$sql_product = ("select * from tbl_product,tbl_order_detail where tbl_order_detail.order_id='$_GET[order_id]'");
						$result_product = mysqli_query($con,$sql_product);
						$product = mysqli_fetch_array($result_product);

				 ?>
				<tr>
					<?php
					 while ($product = mysqli_fetch_array($result_product)) {
					 ?>
					<td><?php echo $product['c_name']; ?>
					<td style="text-align: center;"><img src="admin/backend/product/upload/<?php echo $product["c_img"]; ?>" style="width:100px;"></td>
					</td>
					<td style="text-align: center;"><?php echo number_format($product["c_price"]); ?>đ</td>
					<?php
								$sql_order_detail = "select * from tbl_order_detail where order_id = '$_GET[order_id]'";
								$result = mysqli_query($con,$sql_order_detail);
								$rows = mysqli_fetch_array($result);
					 ?>
					<td style="text-align: center;"><?php echo $rows["c_number"] ?></td>
				</tr>
			<?php  } ?>
			</table>

			<style type="text/css">
				.pagination{padding: 0px; margin:0px;}
			</style>
			<ul class="pagination pull-right">
				<li><a href="#">Trang</a></li>
				<!-- < ?php
					for($i = 1; $i<=$num_page; $i++)
					{
				 ?> -->
				<li><a href="admin.php?quanly=user&p=">1</a></li>
				<!-- < ?php } ?> -->
			</ul>
		</div>
	</div>
</div>
