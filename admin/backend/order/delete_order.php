<?php
      include("../config.php");
      $sql = "delete from tbl_order where order_id='$_GET[id]'";
      mysqli_query($con,$sql);
      header('location:admin.php?quanly=order');
 ?>
