
<?php
        $sql = "select * from tbl_news where pk_news_id='$_GET[id]'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
 ?>


<!-- main -->

     <div class="news-detail">
       <h3><?php echo $row['c_name']  ?></h3>
         <p style="text-align: center;"><img src="admin/backend/news/upload/<?php echo $row['c_img'] ?>" style="width: 500px; margin: "></p>
          <h2><?php echo $row['c_content']; ?></h2>
          <p><?php echo $row['c_description']; ?></p>

     </div>
     <?php require "facebook.php"; ?>

     <!-- end main -->
