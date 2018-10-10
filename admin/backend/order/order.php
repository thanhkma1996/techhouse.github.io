
<?php
include "../config.php";
$sotin1trang = 5;
if( isset($_GET["trang"]) ){
$trang = $_GET["trang"];
settype($trang, "int");
}else{
$trang = 1;
}

$from = ($trang - 1 ) * $sotin1trang;
if($from<0) $from=0;

$qr = "select * from tbl_order inner join tbl_customer on tbl_order.customer_id = tbl_customer.customer_id";
$ds = mysqli_query($con,$qr);
$x = mysqli_query($con,"select order_id from tbl_order");
$tongsotin = mysqli_num_rows($x);
$sotrang = ceil($tongsotin / $sotin1trang);

 ?>
<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">User</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr style="background-color: black; color:white">
					<th>Tên khách hàng</th>
					<th>Ngày mua</th>
					<th>Đơn giá</th>
					<th style="width: 150px;">Trạng thái</th>
					<th style="width: 200px">Quản lý</th>
				</tr>
				<?php
					while($row = mysqli_fetch_array($ds))
					{
				 ?>
				<tr>
					<td><?php echo $row["hovaten"]; ?></td>
					<td style="text-align: center;">
					<?php
						$date = date_create($row["ngaymua"]);
						echo date_format($date,"d/m/Y");
					?></td>
					<td style="text-align: center;"><?php echo $row["gia"]; ?></td>
					<td style="text-align: center;">
						<?php echo $row["trangthai"]==1?"Đã giao hàng":"<span style='color:red;'>Chưa giao hàng</span>" ?>
					</td>
					<td style="text-align: center;">
					<a href="admin.php?quanly=order_detail&order_id=<?php echo $row["order_id"]; ?>">Chi tiết</a>
					&nbsp;&nbsp;
						<a onclick="return window.confirm('Bạn chắc chắn muốn xóa?');" href="admin.php?quanly=delete_order&id=<?php echo $row["order_id"]; ?>">Delete</a>

					</td>
				</tr>
				<?php } ?>
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin:0px;}
			</style>
			<ul class="pagination pull-right">
				<li><a href="#">Trang</a></li>
				 <?php
					for($t = 1; $t<=$sotrang; $t++)
					{
				 ?>
				<li><a href="admin.php?quanly=order&trang=<?php echo $t; ?>"><?php echo $t; ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
