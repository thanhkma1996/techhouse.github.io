
<?php
        $sql = "select * from tbl_product where pk_product_id='$_GET[id]'";
        $result = mysqli_query($con,$sql);
 ?>

<div class="col-xs-12 col-md-9">
  <!-- main -->
  <div class="product-detail" itemscope itemtype="">
  <?php
        while($row = mysqli_fetch_array($result)){
   ?>
    <div class="top">
      <div class="row">
        <div class="col-xs-12 col-md-6 product-image">
          <div class="featured-image"> <img src="admin/backend/product/upload/<?php echo $row['c_img']; ?>" class="img-responsive" id="large-image" itemprop="image" data-zoom-image=""

    alt=""
      /> </div>
        </div>
        <div class="col-xs-12 col-md-6 info">
          <h1 itemprop="name"><?php echo $row['c_name']; ?></h1>
          <p class="sku">Mã sản phẩm:&nbsp; <span><?php echo $row['pk_product_id']; ?></span></p>
          <p class="vendor">Nhà sản xuất:&nbsp; <span><?php echo $row['c_name'] ?></span></p>
          <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price"><?php echo $row['c_price']; ?></span> </span> </p>
          <p class="desc rte"><?php echo $row['c_description'] ?></p>
          <form action="/cart/add" method="post" enctype="multipart/form-data" class="product-form">

            <div class="quantity">
              <label>Số lượng</label>
              <input type="number" id="qty" name="quantity" value="1" min="1" class="input-control" required="Không thể để trống">
            </div>
            <div class="action-btn">
           <button class="button product-add-to-cart" name="add_order" onclick="location.href='index.php?quanly=cart&id=<?php echo $row['pk_product_id']; ?>'">Cho vào giỏ hàng</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="middle">
      <ul class="list-unstyled navtabs">
        <li><a href="#tab1" class="head-tabs head-tab1 active" data-src=".head-tab1">Chi tiết sản phẩm</a></li>
      </ul>
      <div class="tab-container">
        <!-- chi tiet -->
        <div id="tab1" class="content-tabs">
          <div class="rte">
            <p style="text-align: justify;"><?php echo $row['c_description']; ?></p>
            <p style="text-align: justify;"><strong>ĐẶC ĐIỂM NỔI BẬT</strong></p>
            <ul>
              <li style="text-align: justify;"><?php echo $row['c_content'];  ?></li>

            </ul>
          </div>
        </div>
        <!-- chi tiet -->
      </div>
    </div>
  </div>
<?php  } ?>
  <!-- end main -->
  <?php require "facebook.php"; ?>
</div>
</div>
