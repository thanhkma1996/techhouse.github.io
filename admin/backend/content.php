<?php
        if(isset($_GET["quanly"]))
        {
          $row = $_GET["quanly"];

        }
        else
          $row = "";
          // category
          if($row == 'category_product'){
            include('backend/category/category.php');
          }elseif ($row == 'edit_category_product') {
              include('backend/category/edit_category_product.php');
          }elseif ($row == 'add_category_product') {
              include('backend/category/add_category_product.php');
          }elseif ($row == 'delete_category_product') {
              include('backend/category/delete_category_product.php');
              // product //
          }elseif ($row == 'product') {
                    include('backend/product/product.php');
          }elseif ($row == 'add_product') {
                    include('backend/product/add_product.php');
          }elseif ($row == 'edit_product') {
                    include('backend/product/edit_product.php');
          }elseif ($row == 'delete_product') {
                    include('backend/product/delete_product.php');
          }
            // slide
          elseif ($row == 'slide') {
                  include('backend/slide/slide.php');
          }elseif($row == 'add_slide') {
                  include('backend/slide/add_slide.php');
          }elseif ($row == 'edit_slide') {
                  include('backend/slide/edit_slide.php');
          }elseif ($row == 'delete_slide') {
                  include('backend/slide/delete_slide.php');
          }

          // newss
          elseif ($row == 'news') {
                  include('backend/news/news.php');
          }elseif($row == 'add_news') {
                  include('backend/news/add_news.php');
          }elseif ($row == 'edit_news') {
                  include('backend/news/edit_news.php');
          }elseif ($row == 'delete_news') {
                  include('backend/news/delete_news.php');
          }
          // order
          elseif ($row == 'order') {
                  include('backend/order/order.php');
          }elseif ($row == 'order_detail') {
                  include('backend/order/order_detail.php');
          }elseif($row == 'delete_order'){
                  include('backend/order/delete_order.php');
          }
          // adv
          elseif ($row == 'adv') {
                  include('backend/adv/adv.php');
          }elseif ($row == 'edit_adv') {
                  include('backend/adv/edit_adv.php');
          }elseif($row == 'delete_adv'){
                  include('backend/adv/delete_adv.php');
          }
          elseif($row == 'add_adv'){
                  include('backend/adv/add_adv.php');
          }


 ?>
