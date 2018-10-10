<?php
      //session_start();
      if(isset($_POST['login'])){

        $email = mysqli_escape_string($con,$_POST['email']);
        $password = md5($_POST['password']);
        $sql = mysqli_query($con,"select * from tbl_customer where email='$email' and password='$password'");
        $count = mysqli_num_rows($sql);
        if($count>0)
        {

          $_SESSION['login']= $email;
          echo "<h2> Xin chào</h2>".$email."bạn đã đăng nhập thành công</h2>";
        }
          else {
            echo "<h2>Tài khoản hoặc mật khẩu sai</h2>";
          }

      }
      elseif(isset($_GET['quanly']) && $_GET['quanly']=='logout')
      {
        foreach ($_SESSION as $k => $v) {
          unset($_SESSION[$k]);
        }
      }
?>
<div class="col-xs-12 col-md-9">
  <!-- main -->
  <div class="template-customer">
    <h1>Đăng nhập tài khoản</h1>
    <p>Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
    <div class="row" style="margin-top:50px;">
      <div class="col-md-6">
        <div class="wrapper-form">
          <form method='post' action="">
            <p class="title"><span>Đăng nhập tài khoản</span></p>
            <div class="form-group">
              <label>Email:<b id="req">*</b></label>
              <input type="email" class="input-control" name="email" required="">
            </div>
            <div class="form-group">
              <label>Mật khẩu:<b id="req">*</b></label>
              <input type="password" class="input-control" name="password" required="">
            </div>
            <input type="submit" class="button" value="Đăng nhập" name="login">
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="wrapper-form">
          <p class="title"><span>Tạo tài khoản mới</span></p>
          <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>
          <a href="index.php?quanly=register" class="button">Đăng ký</a> </div>
      </div>
    </div>
  </div>
  <!-- end main -->
</div>
