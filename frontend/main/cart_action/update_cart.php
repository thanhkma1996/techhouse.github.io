<?php
      foreach($_SESSION["cart"] as $value){
      $product_id = $value["$_GET[id]"];
      $qty = $_POST["product_".$product_id];
      //update lai phan tu bang cach goi ham cart_update
    }
 ?>
