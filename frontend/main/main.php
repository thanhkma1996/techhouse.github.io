<div class="owl-slider">
  <div class="item">
    <!-- ============================ -->
    <?php require "slide.php" ?>
  </div>
  </div>

  <?php
       if(isset($_GET['quanly'])&&($_GET['quanly'])!=''){
         $row= $_GET['quanly'];
       }else{
         $row ='';
       }
        // product_detail
       if($row == 'product_detail'){
         include('product_detail.php');
       }elseif($row == 'category'){
         include('category.php');
       }elseif($row == 'product_category'){
         include('product_category.php');
       }
       //news
       elseif($row == 'news_category'){
         include('news_category.php');
       }elseif ($row =='news_detail') {
         include('news_detail.php');
       }
       //introduce
       elseif ($row =='introduce') {
         include('introduce.php');
       }
       //register
       elseif($row == 'register'){
         include('register.php');
       }
       //login
       elseif($row == 'login'){
         include('login.php');
       }elseif($row == 'logout'){
         include('login.php');
       }
       elseif($row == 'cart'){
         include('cart.php');
       }
       else{
         include('product.php');
       }
     ?>





  </div>
  </div>
</div>
