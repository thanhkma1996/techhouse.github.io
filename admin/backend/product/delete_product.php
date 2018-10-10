<?php
			include "../config.php";

					$sql = "delete from tbl_product  where pk_product_id='$_GET[id]'";
				 	mysqli_query($con,$sql);
					header('location:admin.php?quanly=product');

 ?>
