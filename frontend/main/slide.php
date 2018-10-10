
<?php
    $sql = "select * from tbl_slide ";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);
 ?>

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
           <!-- Indicators -->
           <ol class="carousel-indicators">
           <?php
             $n=0;
            while($n<$count)
             {
               $n++;

            ?>
             <li data-target="#myCarousel" data-slide-to="<?php echo $n-1; ?>" class="<?php echo $n==1?"active":""; ?>"></li>
             <?php } ?>
           </ol>

           <!-- Wrapper for slides -->
           <div class="carousel-inner">
               <?php
                 $n=0;
                 while($rows = mysqli_fetch_assoc($result))
                 {
                   $n++;
                ?>
        <div class="item <?php echo $n==1?"active":""; ?>" style="height: 500px;">
         <a href="index.php?quanly=slide">
           <img src="admin/backend/slide/upload/<?php echo $rows['c_img']; ?>" alt="">
         </a>
               </div>
             <?php } ?>

           </div>

           <!-- Left and right controls -->
           </div>
