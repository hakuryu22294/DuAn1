<?php
extract($_SESSION['user']);

if (isset($_POST['order'])) {
    // Thực hiện xử lý đặt hàng ở đây
    // Ví dụ: lưu thông tin đơn hàng vào cơ sở dữ liệu, gửi email xác nhận đơn hàng, vv.

    // Sau khi xử lý đặt hàng thành công, bạn có thể hiển thị thông báo đặt hàng thành công và xóa giỏ hàng
    unset($_SESSION['cart']); // Xóa giỏ hàng sau khi đặt hàng thành công
}
?>

<div class="container">
    <div class="box-admin space">
        <div class="box-title">
            <h2>Trạng thái đặt hàng</h2>
        </div>
        <div class="frmcontent">
            <p class="success">Đặt hàng thành công <i class="fa fa-check-circle"></i></p>
            <p class="inner">Cảm ơn bạn đã lựa chọn sản phẩm của chúng tôi. Vui lòng check email bạn đã cung cấp để nhận code của sản phẩm</p>
        </div>
    </div>
</div>