<?php
        include("../config.php");
        $sql = "delete from tbl_news where pk_news_id='$_GET[id]'";
        mysqli_query($con,$sql);
        header('location:admin.php?quanly=news');
 ?>
