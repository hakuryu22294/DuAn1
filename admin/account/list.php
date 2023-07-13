<div class="container">
    <div class="box-admin space">
        <div class="box-title">
            <h1>DANH SÁCH TÀI KHOẢN</h1>
        </div>
        <div class="frmcontent">
            <div class="frmcate-list">
                <table class="table">
                    <thead>
                        <th></th>
                        <th>MÃ TK</th>
                        <th>TÊN USER</th>
                        <th>PASSWORD</th>
                        <th>EMAIL</th>
                        <th>ADDRESS</th>
                        <th>TEL</th>
                        <th>ROLE</th>
                        <th>TÙY CHỌN</th>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($customer_list as $customer) {
                            extract($customer);
                            $edit_customer = 'index.php?act=edit-customer&id=' . $user_id;
                            $delete_customer = 'index.php?act=delete-customer&id=' . $user_id;
                            echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $user_id . '</td>
                                <td>' . $user_name . '</td>
                                <td>' . $password . '</td>
                                <td>' . $email . '</td>
                                <td>' . $address . '</td>
                                <td>' . $tel . '</td>
                                <td>' . ($role == 0 ? "Khách Hàng" : "Admin") . '</td>
                                <td>
                                    <a href="' . $edit_customer . '"><input class="btn btn-success" type="button" value="Sửa"></a>
                                    <a href="' . $delete_customer . '"><input class="btn btn-danger" type="button" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\')" value="Xóa"></a>
                                </td>
                            </tr>';
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>
</div>