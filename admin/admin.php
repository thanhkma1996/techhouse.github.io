<?php 
 session_start();
 if(!isset($_SESSION['login'])){
	 header('location:login.php');
 }
?>
<!DOCTYPE html>
<html>
<base href="">
<head>
	<title>Admin</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/ckeditor/ckeditor.js"></script>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin Project</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <?php require "backend/menu.php" ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" style="margin-top: 100px;">
      <?php  require "backend/content.php"; ?>
    </div>
</body>

</html>
