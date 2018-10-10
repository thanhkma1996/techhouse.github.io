<?php
      $sql = "select * from tbl_adv where c_hotadv = 1";
      $result =   mysqli_query ($con,$sql);
      $row = mysqli_fetch_array($result);

 ?>
<div class="widebanner"> <a href="<?php echo $row['c_url']; ?>"><img src="admin/backend/adv/upload/<?php echo $row['c_img']; ?>" alt="#" class="img-responsive"></a> </div>
