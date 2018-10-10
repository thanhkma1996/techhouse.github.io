<!--Start of Tawk.to Script-->
             <script type="text/javascript">
             var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
             (function(){
             var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
             s1.async=true;
             s1.src='https://embed.tawk.to/59ede8aa4854b82732ff72cc/default';
             s1.charset='UTF-8';
             s1.setAttribute('crossorigin','*');
             s0.parentNode.insertBefore(s1,s0);
             })();
             </script>
<!--End of Tawk.to Script-->
<div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1780127515631166";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div id="fb-root"></div>
<header id="header">
<!-- top header -->
<div class="top-header">
  <div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> 01689487864</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@gmail.com">support@mail.com</a></span> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 customer">
      <?php
          session_start();
          if(isset($_SESSION["login"])&&$_SESSION["login"] != "")
          {
       ?>
       Xin chào <?php echo $_SESSION["login"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?quanly=logout">Logout</a>

       <?php
        }else{
        ?>
      <a href="index.php?quanly=login"><i class="fa fa-user"></i> Đăng nhập</a> <a href="index.php?quanly=register"><i class="fa fa-user-plus"></i> Đăng ký</a>
    <?php } ?>
     </div>
  </div>
  </div>
</div>
<!-- end top header -->
<!-- middle header -->
<div class="mid-header">
<div class="container">
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="index.php"> <img src="public1/frontend/100/047/633/themes/517833/assets/logo.png" alt="TechHouse" title="TechHouse" class="img-responsive"> </a> </div>
  <div class="col-xs-12 col-sm-12 col-md-6 header-search">
    <script type="text/javascript">
      function search(){
      key = document.getElementById("key").value;
      location.href="index.php?quanly=search&key="+key;
      return false;
      }
    </script>
    <form method="post" action="">
    <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
    <button  type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
    </form>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
    <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="index.php?quanly=cart"> <span class="mini-cart-count"> 1 </span> sản phẩm <i class="fa fa-caret-down"></i></a>
    <div class="content-mini-cart">
      <div class="has-items">
      <ul class="list-unstyled">
        <li class="clearfix" id="item-1853038">
        <div class="image"> <a href="index.php?quanly=cart"> <img alt="Sản phẩm 2" src="admin/backend/product/upload/<?php echo $row['c_img']; ?>" title="Sản phẩm 2" class="img-responsive"> </a> </div>
        <div class="info">
          <h3><a href="index.php?quanly=cart">Sản phẩm 2</a></h3>
          <p>1 x 2,000,000₫</p>
        </div>
        <div> <a href="index.php?quanly=cart&act=delete&id=5"> <i class="fa fa-times"></i></a> </div>
        </li>
      </ul>
      <a href="index.php?quanly=cart" class="button">Thanh toán</a> </div>
    </div>
    </div>
  </div>
  </div>
</div>
<!-- end middle header -->
<!-- bottom header -->
<div class="bottom-header">
  <div class="container">
  <div class="clearfix">
    <ul class="main-nav hidden-xs hidden-sm list-unstyled">
    <li class="active"><a href="trang-chu">Trang chủ</a></li>
    <li ><a href="index.php?quanly=introduce">Giới thiệu</a></li>
    <li ><a href="index.php?quanly=news_category">Tin tức</a></li>
      <li ><a href="index.php?quanly=cart">Giỏ Hàng</a></li>
       <li ><a href="index.php?quanly=review">Review</a></li>
        <li ><a href="index.php?quanly=bh">Bảo Hành</a></li>
    <li ><a href="index.php?quanly=lienhe">Liên hệ</a></li>
    </ul>
    <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
    <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
    <li class="active"><a href="index.php">Trang chủ</a></li>
    <li ><a href="index.php?quanly=introduce">Giới thiệu</a></li>
    <li ><a href="index.php?quanly=news_category">Tin tức</a></li>
    <li ><a href="index.php?quanly=lienhe">Liên hệ</a></li>
    </ul>
  </div>
  </div>
</div>
<!-- end bottom header -->
</header>
