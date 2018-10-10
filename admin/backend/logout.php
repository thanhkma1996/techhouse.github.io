<?php
    if(isset($_POST['logout'])){
    unset($_SESSION['dangnhap']);
    header('location:login.php');
  }else {
    echo "lỗi";
  }
 ?>
