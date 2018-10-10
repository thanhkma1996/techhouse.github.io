<?php
			include "../config.php";

					$sql = "delete from tbl_category_product  where pk_category_product_id='$_GET[id]'";
				 	mysqli_query($con,$sql);
					header('location:admin.php?quanly=category_product');

 ?>
