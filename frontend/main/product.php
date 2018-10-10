
<?php
        $sql = "select * from tbl_product where c_hotproduct = 1 order by pk_product_id limit 0,8";
        $result = mysqli_query($con,$sql);

 ?>
<div class="special-collection">
  <div class="tabs-container">
  <div class="clearfix">
    <h2>Sản phẩm nổi bật</h2>
  </div>
  </div>
  <div class="tabs-content row">
  <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
    <div class="clearfix">

      <?php
              while($row = mysqli_fetch_array($result))
              {
       ?>
    <!-- box product -->
    <div class="col-xs-6 col-md-3 col-sm-6 ">
      <div class="product-grid" id="product-1168979">
      <div class="image"> <a href="index.php?quanly=product_detail&pk_category_product_id=<?php echo $row['fk_category_product_id'] ?>&id=<?php echo $row['pk_product_id'] ?>"><img src="admin/backend/product/upload/<?php echo $row['c_img']; ?>"   class="img-responsive"></a> </div>
      <div class="info">
        <h3 class="name"><a href="index.php?quanly=product_detail&pk_category_product_id=<?php echo $row['fk_category_product_id'] ?>&id=<?php echo $row['pk_product_id'] ?>"><?php echo $row['c_name']; ?></a></h3>
        <p class="price-box"> <span class="special-price"> <span class="price product-price"><?php echo $row['c_price']; ?></span> </span> </p>
        <div class="action-btn">
        <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
          <a href="index.php?quanly=product_detail&pk_category_product_id=<?php echo $row['fk_category_product_id'] ?>&id=<?php echo $row['pk_product_id'] ?>" class="button">Chọn sản phẩm</a>
        </form>
        </div>
      </div>
      </div>
    </div>
    <!-- end box product -->
      <?php
          }
       ?>
    </div>
  </div>
  </div>
</div>

<?php
        $sql = "select * from tbl_product order by pk_product_id desc limit 0,8";
        $result = mysqli_query($con,$sql);
 ?>

<div class="wrapper-tab-collections" style="margin-top:0px;">
  <div class="tabs-container">
  <ul class="list-unstyled">
    <li><a href="#content-taba1" class="head-tabs head-tab1" data-src=".head-tab1">
    <h2>Sản phẩm mới</h2>
    </a></li>
  </ul>
  </div>
  <div class="tabs-content row">
  <div id="content-taba4" class="content-tab content-tab-proindex">

      <?php
            while ($row1 = mysqli_fetch_array($result)) {
        ?>
    <!-- box product -->
    <div class="col-xs-6 col-md-3 col-sm-6 ">
      <div class="product-grid" id="product-1168979">
      <div class="image"> <a href="index.php?quanly=product_detail&pk_category_product_id=<?php echo $row1['fk_category_product_id'] ?>&id=<?php echo $row1['pk_product_id'] ?>"><img src="admin/backend/product/upload/<?php echo $row1['c_img']; ?>"   class="img-responsive"></a> </div>
      <div class="info">
        <h3 class="name"><a href="index.php?quanly=product_detail&pk_category_product_id=<?php echo $row1['fk_category_product_id'] ?>&id=<?php echo $row1['pk_product_id'] ?>"><?php echo $row1['c_name']; ?></a></h3>
        <p class="price-box"> <span class="special-price"> <span class="price product-price"><?php echo $row1['c_price']; ?></span> </span> </p>
        <div class="action-btn">
        <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
          <a href="index.php?quanly=product_detail&pk_category_product_id=<?php echo $row1['fk_category_product_id'] ?>&id=<?php echo $row1['pk_product_id'] ?>" class="button">Chọn sản phẩm</a>
        </form>
        </div>
      </div>

      </div>
    </div>
    <!-- end box product -->
    <?php
  }
      ?>
  </div>
  </div>
</div>
<!-- end main -->
</div>
</div>

<!-- adv -->
<?php require "adv_footer.php"  ?>
<!-- end adv -->

</div>
</div>
