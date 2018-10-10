<?php
          include("../config.php");
          $sql = "delete from tbl_adv where pk_adv_id='$_GET[id]'";
          mysqli_query($con,$sql);
          header('location:admin.php?quanly=adv');
 ?>
