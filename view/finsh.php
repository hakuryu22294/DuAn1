<?php
extract($_SESSION['user']);

if (isset($_POST['order'])) {
    // Thực hiện xử lý đặt hàng ở đây
    // Ví dụ: lưu thông tin đơn hàng vào cơ sở dữ liệu, gửi email xác nhận đơn hàng, vv.

    // Sau khi xử lý đặt hàng thành công, bạn có thể hiển thị thông báo đặt hàng thành công và xóa giỏ hàng
    unset($_SESSION['cart']); // Xóa giỏ hàng sau khi đặt hàng thành công
    echo "<p>Đặt hàng thành công!</p>";
}
?>

<div class="container">
    <div class="row">
        <div class="box-left col-12">
            <div class="prd-details">

                <div class="box-title">
                    <form action="index.php?act=order" method="post">
                        Đặt hàng thành công
                        <div class="mb-3">
                            <input disabled  type="hidden" name="user_id" value="<?=$user_id?>">
                            <label for="exampleInputEmail1" class="form-label">Họ và tên</label>
                            <input disabled  type="text" class="form-control" name="fullname" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="<?=$user_name?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
                            <input disabled  type="text" class="form-control" name="address" id="exampleInputPassword1"
                                value="<?=$address?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input disabled  type="email" class="form-control" name="email" id="exampleInputPassword1"
                                value="<?=$email?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                            <input disabled  type="tel" class="form-control" name="phone" id="exampleInputPassword1"
                                value="<?=$tel?>">
                        </div>

                    </form>
                    <h2>Thông tin đơn hàng</h2>
                </div>
                <!-- Hiển thị thông tin các sản phẩm trong giỏ hàng -->
                <?php
                // Đoạn code PHP để lấy thông tin sản phẩm trong giỏ hàng từ session và hiển thị
                // Thay thế phần này bằng mã PHP để hiển thị thông tin giỏ hàng của bạn
                ?>
                <div class="box-details align-items-center">
                    <?php 
$total_full = 0;
$i = 0;
foreach ($_SESSION['cart'] as $cart) { 
    $total = $cart[3] * $cart[4];
    $total_full += $total;
    $delCart = '<a href="index.php?act=delCart&idCart='.$i.'"><input type="button" value="Xóa"></a>';
    ?>
    <div class="row">
        <div class="prd-img col-4">
            <!-- Hiển thị ảnh sản phẩm -->
            <img src="<?=$cart[2]?>" alt="Product Image">
        </div>
        <div class="prd-info col-8">
            <div class="prd-name">
                <!-- Hiển thị tên sản phẩm -->
                <h3><span><?=$cart[1]?></span></h3>
            </div>
            <div class="price">
                <!-- Hiển thị giá sản phẩm -->
                <p>Giá sản phẩm: <span><?=$cart[3]?></span></p>
            </div>
            <div class="quantity">
                <!-- Hiển thị số lượng sản phẩm trong giỏ hàng -->
                <p>Số lượng: <span><?=$cart[4]?></span></p>
            </div>
            <div class="subtotal">
                <!-- Hiển thị tổng tiền của sản phẩm (giá x số lượng) -->
                <p>Tổng cộng: <span><?=$total?></span></p>
            </div>
            <div class="remove-item">
                <!-- Nút xóa sản phẩm khỏi giỏ hàng -->
                <?= $delCart; ?>
            </div>
        </div>
    </div>
<?php 
    $i++;
} 
?>

<!-- Hiển thị tổng tiền của toàn bộ giỏ hàng -->
<div class="row total-full">
    <p>Tổng tiền của giỏ hàng: <span><?=$total_full?></span></p>
</div>

</div>
</div>
</div>
