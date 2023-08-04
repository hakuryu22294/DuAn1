<div class="container">
    <div class="box-admin space">
        
            <div class="box-title">
                <h2>Giỏ hàng</h2>
            </div>
            <!-- Hiển thị thông tin các sản phẩm trong giỏ hàng -->
            <?php
            // Đoạn code PHP để lấy thông tin sản phẩm trong giỏ hàng từ session và hiển thị
            // Thay thế phần này bằng mã PHP để hiển thị thông tin giỏ hàng của bạn
            ?>
            <?php 
                $total_full = 0;
                $itemsCount = 0;
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
                         $itemsCount += $cart[4];
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
            </table>
            <div class="total-full">
                <p>Tổng tiền: <span><?=$total_full?></span></p>
            </div>
            <?php
                if (isset($_SESSION['user'])) {
                    // Nếu người dùng đã đăng nhập, hiển thị các nút "Đồng ý đặt hàng" và "Xóa giỏ hàng"
                    if($itemsCount>0){
                        echo '
                        <div class="button-cart">
                            <a class="btn btn-primary" href="index.php?act=bill">Đồng ý đặt hàng </a>
                            <a class="btn btn-danger" href="index.php?act=delCart">Xóa giỏ hàng</a>
                        </div>
                        ';
                    }else{
                        echo "<p class='warning'>Hiện không có sản phẩm nào trong giỏ. Vui lòng thêm sản phẩm để tiếp tục đặt hàng !</p>";
                    }
                } else {
                    // Nếu người dùng chưa đăng nhập, hiển thị thông báo
                    echo '<p class="warning">Vui lòng đăng nhập để đặt hàng.</p>';
                }
            ?>
        </div>
    </div>
