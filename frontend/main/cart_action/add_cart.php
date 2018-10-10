<?php
            @session_start();
            if(isset($_SESSION["cart"]["$_GET[id]"])){
            //nếu đã có sp trong giỏ hàng thì số lượng lên 1
            $_SESSION["cart"]["$_GET[id]"]["number"]++;
            } else {
            //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
            $sql = "selecr * from tbl_product where pk_product_id = '$_GET[id]'";
            $result = mysqli_query($con,$sql);
            $row_product_cart = mysqli_fetch_array($result);
            $_SESSION['cart']['$_GET[id]'] = array(
                "pk_product_id" =>"$_GET[id]"",
                "c_name" => "$row_product_cart['c_name']",
                "c_img" => "$row_product_cart['c_img']",
                "number" = 1,
                "c_price" = "$row_product_cart['c_price']"
            );

 ?>
