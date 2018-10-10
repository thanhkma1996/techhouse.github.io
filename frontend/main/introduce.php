
<?php
        $sql = "select * from tbl_introduce order by pk_introduce_id desc limit 0,1";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
 ?>

<!-- main -->

     <div class="news-detail">
       <h3><?php echo $row['c_name']  ?></h3>
         <p style="text-align: center;"><img src="public/upload/introduce/<?php echo $row['c_img'] ?>" style="width: 500px; margin: "></p>
         <p><?php echo $row['c_description']; ?></p>
          <p><?php echo $row['c_content']; ?></p>
     </div>

     <!-- end main -->
