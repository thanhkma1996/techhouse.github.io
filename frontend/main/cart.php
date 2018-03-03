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
          <tr>
            <td><img src="public/upload/product/1494416685000000000010021355-may-tinh-xach-tay-lenovo-ideapad-flex-2-14e284.jpg" class="img-responsive" /></td>
            <td><a href="index.php?quanly=product_detail&id=5">Sản phẩm 2</a></td>
            <td> 2,000,000₫ </td>
            <td><input type="number" id="qty" min="1" class="input-control" value="1" name="product_5" required="Không thể để trống"></td>
            <td><p><b>2,000,000₫</b></p></td>
            <td><a href="index.php?quanly=cart&act=delete&id=5" data-id="2479395"><i class="fa fa-trash"></i></a></td>
          </tr>
          <tr>
            <td><img src="public/upload/product/1494416707canon-mp237-017de3.jpg" class="img-responsive" /></td>
            <td><a href="index.php?quanly=product_detail&id=9">Sản phẩm 5</a></td>
            <td> 2,000,000₫ </td>
            <td><input type="number" id="qty" min="1" class="input-control" value="1" name="product_9" required="Không thể để trống"></td>
            <td><p><b>2,000,000₫</b></p></td>
            <td><a href="index.php?quanly=cart&act=delete&id=9" data-id="2479395"><i class="fa fa-trash"></i></a></td>
          </tr>
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
    <a href="index.php?quanly=checkout" class="button black">Thanh toán</a> </div>
</div>
<!-- end main -->
