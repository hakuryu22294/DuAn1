<div class="container">
    <div class="box-admin space">
        <div class="box-title">
            <h2>DANH SÁCH ĐƠN HÀNG</h2>
        </div>
        </table>
        <div class="frmcontent">
            <div class=" frmcate-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th></th>
                            <th scope="col">MÃ ĐƠN HÀNG</th>
                            <th scope="col">KHÁCH HÀNG</th>
                            <th scope="col">NGÀY ĐẶT HÀNG</th>
                            <th scope="col">GIÁ TRỊ ĐƠN HÀNG</th>
                            <th scope="col">TÙY CHỌN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($list_bill as $bill){
                                extract($bill);
                                $customer = $bill_name.'<br>'.$bill_email.'<br>'.$bill_address.'<br>'.$bill_tel;
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>HD-'.$bill['id'].'</td>
                                        <td><p class="customer">'.$customer.'</p></td>
                                        <td>'.$date.'</td>
                                        <td>'.$total.'</td>
                                        <td>
                                            <a href=""><input class="btn btn-success" type="button" value="Sửa"></a>
                                            <a href="index.php?act=delete-bill&id='.$id.'"><input class="btn btn-danger" type="button" onclick="return confirm(\'Bạn có chắc chắn muốn hoàn thành không?\')"value="Hoàn thành"></a>
                                        </td>
                                    </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
                if(isset($inner)&&$inner!=""){
                    echo '<div class="notification mt-3">'.$inner.'</div>';
                }
                ?>
        </div>
    </div>
</div>
