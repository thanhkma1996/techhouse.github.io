<?php
      if(isset($_POST["logout"]))
      {
        unset($_SESSION["login"]);
        header('location:login.php');
      }
 ?>

<ul class="nav navbar-nav">
  <li class="active"><a href="#">Home</a></li>
  <li class="active"><a href="admin.php?quanly=category_product">Danh mục sản phẩm</a></li>
   <li class="active"><a href="admin.php?quanly=product">Danh sách sản phẩm</a></li>
      <li class="active"><a href="admin.php?quanly=slide">Slide</a></li>
    <li class="active"><a href="admin.php?quanly=news">Tin tức</a></li>
     <li class="active"><a href="admin.php?quanly=introduce">Gioi thiệu</a></li>
   <li class="active"><a href="admin.php?quanly=order">Đơn hàng</a></li>
        <li class="active"><a href="admin.php?quanly=adv">quảng cáo</a></li>
   <li class="active" ><a href="admin.php?quanly=logout" class="glyphicon glyphicon-log-in"> Logout</a></li>
</ul>
