<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="content-language" content="vi" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="noodp,index,follow" />
<meta name='revisit-after' content='1 days' />
<meta name="keywords" content="">
<title>TechHouse</title>
<meta name="description" content="TechHouse">
<meta property="og:type" content="website">
<meta property="og:title" content="TechHouse">
<meta property="og:image" content="public1/frontend/100/047/633/themes/517833/assets/logo.png">
<meta property="og:image:secure_url" content="public1/frontend/100/047/633/themes/517833/assets/logo.png">
<meta property="og:url" content="index.php">
<meta property="og:site_name" content="TechHouse">
<link rel="canonical" href="index.php">
<link rel="shortcut icon" href="public1/frontend/100/047/633/themes/517833/assets/favicon221b.png?1481775169361" type="image/x-icon" />
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet"> -->
<link href='public1/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='public1/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='public1/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='public1/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='public1/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
<script src='public1/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
<script src='public1/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
<script src='public1/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
<link href='public1/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
</head>
<body class="index">

<!-- header -->
<?php require "header/header.php" ?>
<!-- end header -->
<div class="content">
  <div class="container">
  <h1 style="display:none;">TechHouse</h1>

  <div class="row">
    <div class="col-xs-12 col-md-3">
     <!-- category product -->
  <?php require "main/category.php";  ?>
  <!-- end category product -->
    <!-- end support -->
    <?php require "main/support.php"; ?>
    <!-- end support online -->
    <!-- hot news -->
    <?php require "main/hot_news.php"; ?>
    <!-- end hot news -->
    <!-- adv -->
    <?php require "main/adv_product.php" ?>
    <!-- end adv -->

    </div>
    <div class="col-xs-12 col-md-9">
    <!-- main -->

    <?php require "main/main.php"; ?>
    <!-- end main -->
    </div>
  </div>
  <!-- adv -->
  <!-- end adv -->

  </div>
</div>

    <?php require "footer/footer.php"; ?>
</body>
</html>
