<?php
                  //khởi tạo giỏ hàng
                  @session_start();
                  if(!isset($_SESSION['cart']))
                  ob_start();
                  $_SESSION['cart'] = array();
                  //===========
                  $act = isset($_GET["act"]);

                  switch($act){
                  case "add":
                      //add san pham vao gio hang bang cach goi ham cart_add
                      include("cart_action/add_cart.php");
                      echo "<script language='javascript'>location.href='index.php?quanly=cart';</script>";
                      break;
                  case "delete":
                  //xoa phan tu khoi $_SESSION["cart"] bang cach goi ham cart_delete
                       include("cart_action/delete_cart.php");
                       echo "<script language='javascript'>location.href='index.php?quanly=cart';</script>";
                       break;
                  case "update":
                  //duyet cac phan tu trong sessin array, update lai tung phan tu
                        include("cart_action/update_cart.php");
                        echo "<script language='javascript'>location.href='nang-cap';</script>";
                        break;
                  case "destroy":
                  //xoa toan bo gio hang bang cach goi ham cart_destroy
                        include("cart_action/destroy_cart.php");
                  echo "<script language='javascript'>location.href='index.php?quanly=cart';</script>";
                  break;
                  }
                  //===========

 // ?>
<div class="template-cart">
  <form action="index.php?quanly=cart&act=update" method="post">
    <div class="table-responsive">
      <table class="table table-cart">
        <thead>
          <tr>
            <th class="image">Ảnh sản phẩm</th>
            <th class="name">Tên sản phẩm</th>
            <th class="price">Giá bán lẻ</th>
            <th class="quantity">Số lượng</th>
            <th class="price">Thành tiền</th>
            <th>Xóa</th>
          </tr>
        </thead>
        <tbody>
          <?php
                  foreach(($_SESSION["cart"][' $_GET[id]']) as $product)
                  {
                    print_r($product);
                 ?>
          <tr>
            <td><img src="admin/backend/product/upload/<?php $product['c_img']; ?>" class="img-responsive" /></td>
            <td><a href="index.php?quanly=tbl_product_detail&id=5"><?php $product['c_name'];  ?></a></td>
            <td> <?php echo $row['c_price']; ?> </td>
            <td><input type="number" id="qty" min="1" class="input-control" value="1" name="tbl_product_5" required="Không thể để trống"></td>
            <td><p><b> <?php echo $row['c_price']; ?></b></p></td>
            <td><a href="index.php?quanly=cart&act=delete&id=5" data-id="2479395"><i class="fa fa-trash"></i></a></td>
          </tr>
        <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="6"><a href="index.php?quanly=cart&act=destroy" class="button pull-left">Xóa toàn bộ</a> <a href="index.php" class="button pull-right black">Tiếp tục mua hàng</a>
              <input type="submit" class="button pull-right" value="Cập nhật"></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </form>
  <div class="total-cart"> Tổng tiền thanh toán:
    4,000,000₫ <br>
    <a href="index.php?quanly=checkout" class="button black" name="order" >Thanh toán</a> </div>
</div>
<!-- end main -->
