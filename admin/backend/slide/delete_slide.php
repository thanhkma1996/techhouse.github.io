<?php
          include("../config.php");
          $sql = "delete from tbl_slide where pk_slide_id='$_GET[id]'";
          mysqli_query($con,$sql);
          header('location:admin.php?quanly=slide');
 ?>
