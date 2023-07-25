<div class="container">
    <div class="row">
        <div class="box-left col-12">
            <div class="prd-details">
                <div class="box-title">
                    <h2>Giỏ hàng</h2>
                </div>
                <!-- Hiển thị thông tin các sản phẩm trong giỏ hàng -->
                <?php
                // Đoạn code PHP để lấy thông tin sản phẩm trong giỏ hàng từ session và hiển thị
                // Thay thế phần này bằng mã PHP để hiển thị thông tin giỏ hàng của bạn
                ?>
                <div class="box-details align-items-center">
                <?php 
$total_full = 0;
foreach ($_SESSION['cart'] as $key => $cart) { 
    $total = $cart[3] * $cart[4];
    $total_full += $total;
    $delCart = '<a href="index.php?act=delCart&idCart='.$key.'"><input type="button" >Xóa</a>';
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
<?php } ?>

<!-- Hiển thị tổng tiền của toàn bộ giỏ hàng -->\

<div class="row total-full">
    <p>Tổng tiền của giỏ hàng: <span><?=$total_full?></span></p>

</div>
<?php
if (isset($_SESSION['user'])) {
    // Nếu người dùng đã đăng nhập, hiển thị các nút "Đồng ý đặt hàng" và "Xóa giỏ hàng"
    echo '
    <div class="row mb">
        <a href="index.php?act=bill"><input type="button"> Đồng ý đặt hàng </a>
        <a href="index.php?act=delCart"><input type="button">Xóa giỏ hàng</a>
    </div>
    ';
} else {
    // Nếu người dùng chưa đăng nhập, hiển thị thông báo
    echo '<p>Vui lòng đăng nhập để đặt hàng.</p>';
}
?>

<div class="container">
    <div class="row">
        <div class="box-left col-12">
            <div class="prd-details">
                
                <div class="box-title">
                <form action="index.php?act=order" method="post">
  


                </div>
            </div>
            <!-- Hiển thị các sản phẩm khác trong giỏ hàng -->
            <!-- Thay thế đoạn dưới đây bằng mã PHP để hiển thị các sản phẩm khác trong giỏ hàng (nếu có) -->
          
            <!-- Kết thúc phần hiển thị các sản phẩm khác trong giỏ hàng -->
        </div>
        <?php
            // Bỏ phần include 'right-box.php'; (đây có thể là sidebar hoặc các thông tin bổ sung không liên quan đến giỏ hàng)
        ?>
    </div>
</div>