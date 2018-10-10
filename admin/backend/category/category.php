
<?php
  include "../config.php";
 $sotin1trang = 5;
 if( isset($_GET["trang"]) ){
	$trang = $_GET["trang"];
	settype($trang, "int");
}else{
	$trang = 1;
}

	$from = ($trang - 1 ) * $sotin1trang;
	if($from<0) $from=0;

 $qr =( "SELECT * FROM tbl_category_product LIMIT $from, $sotin1trang");
	$ds = mysqli_query($con,$qr);
  $x = mysqli_query($con,"select pk_category_product_id from tbl_category_product");
  $tongsotin = mysqli_num_rows($x);
  $sotrang = ceil($tongsotin / $sotin1trang);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>view_category_product</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
  </head>
  <body>
        <div class="col-md-10 col-md-offset-1" style="margin-top: 10px;" >
          <div style="margin-bottom: 5px;"><a href="admin.php?quanly=add_category_product" class="btn btn-primary">Add</a></div>
            <div class="panel panel-primary">
                <div class="panel-heading">category_product</div>
                    <div class="panel-body">
                        <table class="table table-hover table-bordered">
                          <tr>
                            <th>Tên Danh mục</th>
                            <th>Hot </th>
                            <th style="width: 100px;"></th>
                          </tr>
                          <?php while($row =  mysqli_fetch_array($ds))
                                {
                           ?>
                          <tr>
                              <td><?php echo $row['c_name']; ?></td>
                              <td style="text-align: center;">
                                <?php
                                    if($row['c_home'] == 1){
                                      ?>
                                      <span class="glyphicon glyphicon-check" name = "c_home"></span>
                                  <?php } ?>
                              </td>

                             <td style="text-align: center;">
                               <a href="admin.php?quanly=edit_category_product&id=<?php echo $row['pk_category_product_id']; ?>">Edit</a> &nbsp;&nbsp;
                                <a onclick="return window.confirm('Bạn muốn xóa không');" href="admin.php?quanly=delete_category_product&id=<?php echo $row['pk_category_product_id']; ?>">Delete</a>
                             </td>
                          </tr>
                        <?php }  ?>
                        </table>
                        <ul class="pagination" style="padding: 0px; margin-top: 0px;">
                          <li><a href="">Trang</a></li>
                          <?php

                                for($t=1; $t<=$sotrang; $t++){
                          ?>
                           <li><a href="admin.php?quanly=category_product&trang=<?php echo $t; ?>"><?php echo $t; ?></a></li>
                        <?php } ?>
                        </ul>
                    </div>

            </div>

        </div>

  </body>
</html>
