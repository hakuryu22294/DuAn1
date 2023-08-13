
<?php    
  if(isset($_SESSION['user'])){
    $name = $_SESSION['user']['user_name'];
    $address = $_SESSION['user']['address'];
    $email = $_SESSION['user']['email'];
    $tel = $_SESSION['user']['tel'];
  }else{
    $name ="";
    $address ="";
    $email ="";
    $tel ="";
  }
; ?>
<div class="container">
  <form action="index.php?act=order" method="post" enctype="multipart/form-data"> 
    <div class="box-admin space">
        <div class="box-title">
          <h2>Thông tin đặt hàng</h2>
        </div>
            <div class="frmcontent">
              <div class="mb-3">
              <input type="hidden" name="user_id" value ="<?=$user_id?>">
              <label for="exampleInputEmail1"class="form-label">Họ và tên</label>
              <input type="text" class="form-control"  name="fullname"  id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$name?>">
              </div>
              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
              <input type="text" class="form-control"  name="address"  id="exampleInputPassword1" value="<?=$address?>">
              </div>
              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Email</label>
              <input type="email" class="form-control"  name="email"  id="exampleInputPassword1" value="<?=$email?>">
              </div>
              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
              <input type="tel" class="form-control"  name="tel"  id="exampleInputPassword1" value="<?=$tel?>">
        </div>
      </div>    
    </div>
    <div class="box-admin space">
  <div class="box-title">
    <h2>Giỏ hàng</h2>
  </div>
  <?php 
    $total_full = 0;
  ?>
  <div class="frmcontent">
      <div class=" frmcate-list">
            <table class="table">
              <thead>
                <tr>
                    <th scope="col">TÊN SẢN PHẤM</th>
                    <th scope="col">HÌNH ẢNH</th>
                    <th scope="col">SỐ LƯỢNG</th>
                    <th scope="col">GIÁ</th>
                    <th scope="col">TÙY CHỌN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($_SESSION['cart'] as $key => $cart){
                        $total = $cart[3] * $cart[4];
                        $total_full += $total;
                        $img_show = $img_path_folder.$cart[2];
                        $delCart = '<a class="btn btn-danger" href="index.php?act=delCart&idCart='.$key.'">Xóa</a>';
                        echo '<tr>
                                <td>'.$cart[1].'</td>
                                <td><img width="100px" src="'.$cart[2].'" alt=""></td>
                                <td>'.$cart[4].'</td>
                                <td>'.$cart[3].'</td>
                                <td>'.$delCart.'</td>
                            </tr>';
                        }
                ?>
            </tbody>
            <tfoot>
              <th scope="col-6">Tổng tiền</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col-6"><?=$total_full?></th>
            </tfoot>
          </table>
              <div class="button-cart">  
              <button type="submit" name="order" class="btn btn-primary">Đặt hàng</button>                    
              </div>
          </div>
      </div>
  </div>
  </form>
</div>


  

