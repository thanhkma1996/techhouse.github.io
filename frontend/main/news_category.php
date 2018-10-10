<?php
$sotin1trang = 2;
if( isset($_GET["trang"]) ){
 $trang = $_GET["trang"];
 settype($trang, "int");
}else{
 $trang = 1;
}

 $from = ($trang - 1 ) * $sotin1trang;
 if($from<0) $from=0;

$qr =( "SELECT * FROM tbl_news limit  $from, $sotin1trang");
 $ds = mysqli_query($con,$qr);
 $x = mysqli_query($con,"select pk_news_id from tbl_news");
 $tongsotin = mysqli_num_rows($x);
 $sotrang = ceil($tongsotin / $sotin1trang);

?>

<div class="col-xs-12 col-md-12">
  <!-- main -->
  <h1>Tin tức</h1>
  <div class="wrapper-blog">
    <!-- list news -->

    <div class="row">
      <?php
              while($row=mysqli_fetch_array($ds))
              {
      ?>
      <div class="col-md-6 article"> <a href="index.php?quanly=news_detail&id=<?php echo $row['pk_news_id']; ?>" class="image"> <img src="admin/backend/news/upload/<?php echo $row['c_img']; ?>"  title="<?php echo $row['c_name']; ?>" class="img-responsive"> </a>
        <b style="font-size:18px;"><a href="index.php?quanly=news_detail&id=<?php echo $row['pk_news_id']; ?>"><?php echo $row['c_name']; ?></a></b>
      </div>
        <?php } ?>
    </div>
    <!-- end list news -->

    <ul class="pagination pull-right" style="margin-top: 0px !important">
      <li><a href="#">Trang</a></li>
        <?php
              	for($t=1; $t<=$sotrang; $t++){
         ?>
      <li><a href="index.php?quanly=news_category&trang=<?php echo $t; ?>"><?php echo $t ?></a></li>
      <?php } ?>
    </ul>
  </div>

  <!-- end main -->
</div>
