<?php
      $sql = "select * from tbl_adv";
      $result =   mysqli_query ($con,$sql);
      $row = mysqli_fetch_array($result);

 ?>
 <a href ="<?php echo $row['c_url']; ?>" ><img src="admin/backend/adv/upload/<?php echo $row['c_img']; ?>"></a>
