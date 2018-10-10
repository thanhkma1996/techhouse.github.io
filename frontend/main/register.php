<?php
	if(isset($_POST['gui'])){

    $hovaten = mysqli_escape_string($con,$_POST["hovaten"]);
    				$email = mysqli_escape_string($con,$_POST["email"]);
    				$diachi = mysqli_escape_string($con,$_POST["diachi"]);
    				$dienthoai = mysqli_escape_string($con,$_POST["dienthoai"]);
    				$password = md5($_POST["password"]);
     $sql_dangky=mysqli_query($con,"insert into tbl_customer(hovaten, diachi, dienthoai,  email, password) VALUES ('$hovaten','$diachi','$dienthoai','$email','$password')");

	if($sql_dangky){
	 	echo '<h3 style="margin-left:5px;">Bạn đã đăng ký thành công</h3>';
		echo '<a href="?quanly=dangnhap" style="margin:20px;text-decoration:none;">Quay lại để đăng nhập mua hàng</a>';


	}
}


?>



<div class="col-xs-12 col-md-9">
  <!-- main -->
  <div class="template-customer">
    <h1>Đăng ký tài khoản</h1>
    <p>Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
    <div class="row" style="margin-top:50px;">
      <div class="col-md-6">
        <div class="wrapper-form">
          <form method='post' action="">
            <p class="title"><span>Đăng ký tài khoản</span></p>
            <div class="form-group">
              <label>Họ và tên:</label>
              <input type="text" name="hovaten" class="input-control">
            </div>
            <div class="form-group">
              <label>Email:<b id="req">*</b></label>
              <input type="text" name="email" class="input-control" required>
            </div>
            <div class="form-group">
              <label>Địa chỉ:</label>
              <input type="text" name="diachi" class="input-control">
            </div>
            <div class="form-group">
              <label>Điện thoại:</label>
              <input type="text" name="dienthoai" class="input-control">
            </div>
            <div class="form-group">
              <label>Mật khẩu:<b id="req">*</b></label>
              <input type="password" name="password" class="input-control" required="">
            </div>
            <div class="form-group">
              <input type="submit" class="button" name="gui" value="Đăng ký">
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="wrapper-form">
          <p class="title"><span>Đăng nhập</span></p>
          <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
          <a href="index.php?quanly=login" class="button">Đăng nhập</a> </div>
      </div>
    </div>
  </div>
  <!-- end main -->
</div>
</div>
