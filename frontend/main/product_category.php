
<?php
          $sql = "select c_name from tbl_category_product where pk_category_product_id='$_GET[id]'";
          $result = mysqli_query($con,$sql);
          $row_category = mysqli_fetch_array($result);
  ?>

  <?php
      $sql_loaisp="select * from tbl_product where tbl_product.fk_category_product_id='$_GET[id]'";
      $num_loaisp=mysqli_query($con,$sql_loaisp);
      $count=mysqli_num_rows($num_loaisp);

  ?>
<div class="wrapper-tab-collections" style="margin-top:0px;">
  <div class="tabs-container">
  <ul class="list-unstyled">
    <li><a href="#content-taba1" class="head-tabs head-tab1" data-src=".head-tab1">
    <h2><?php echo $row_category['c_name']; ?></h2>
    </a></li>
  </ul>
  </div>
  <div class="tabs-content row">
  <div id="content-taba4" class="content-tab content-tab-proindex">
      <?php
            if($count > 0){
              while($row_product = mysqli_fetch_array($num_loaisp))
              {

       ?>
    <!-- box product -->
    <div class="col-xs-6 col-md-3 col-sm-6 ">
      <div class="product-grid" id="product-1168979">
      <div class="image"> <a href="index.php?quanly=product_detail&pk_category_product_id=<?php echo $row_product['fk_category_product_id'] ?>&id=<?php echo $row_product['pk_product_id'] ?>"><img src="admin/backend/product/upload/<?php echo $row_product['c_img']; ?>" title="<?php echo $row_product['c_name']; ?>" alt="Sản phẩm 2" class="img-responsive"></a> </div>
      <div class="info">
        <h3 class="name"><a href="index.php?quanly=product_detail&pk_category_product_id=<?php echo $row_product['fk_category_product_id'] ?>&id=<?php echo $row_product['pk_product_id'] ?>"><?php echo $row_product['c_name']; ?></a></h3>
        <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo $row_product['c_price']; ?></span> </span> </p>
        <div class="action-btn">
        <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
          <a href="index.php?quanly=product_detail&pk_category_product_id=<?php echo $row_product['fk_category_product_id'] ?>&id=<?php echo $row_product['pk_product_id'] ?>" class="button">Chọn sản phẩm</a>
        </form>
        </div>
      </div>
      </div>
    </div>
    <!-- end box product -->
    <?php
      }
    }else {
      echo "<h2> Hiện chưa có sản phẩm nào ??? </h2>";
    }
     ?>
     <div style="clear: both;"></div>
         <ul class="pagination pull-right" style="margin-top: 0px !important">
           <li><a href="#">Trang</a></li>
                       <li><a href="index.php?quanly=product_category&trang=">1</a></li>
             </ul>
