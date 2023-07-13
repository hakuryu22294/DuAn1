<div class="container">
    <div class="box-admin space">
        <div class="box-title">
            <h2>DANH SÁCH HÀNG HÓA</h2>
        </div>
        </table>
        <div class="frmcontent">
            <div class=" frmcate-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th></th>
                            <th scope="col">MÃ LOẠI</th>
                            <th scope="col">TÊN SẢN PHẤM</th>
                            <th scope="col">HÌNH ẢNH</th>
                            <th scope="col">GIÁ</th>
                            <th scope="col">LƯỢT XEM</th>
                            <th scope="col">TÙY CHỌN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($prd_list as $product){
                                extract($product);
                                $edit_prd = 'index.php?act=edit-prd&id='.$pro_id;
                                $delete_prd = 'index.php?act=delete-prd&id='.$pro_id;
                                $imgpath="../upload/".$img;
                                if(is_file($imgpath)){
                                    $img_prd='<img src="'.$imgpath.'" height="80px">';
                                }else{
                                    $img_prd='Không có ảnh';
                                }
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$cate_id.'</td>
                                        <td>'.$prd_name.'</td>
                                        <td>'.$img_prd.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$view.'</td>
                                        <td>
                                            <a href="'.$edit_prd.'"><input class="btn btn-success" type="button" value="Sửa"></a>
                                            <a href="'.$delete_prd.'"><input class="btn btn-danger" type="button" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\')"value="Xóa"></a>
                                        </td>
                                    </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="">
                <input type="button" class="btn btn-primary" value="Chọn tất cả">
                <input type="button" class="btn btn-secondary" value="Bỏ chọn tất cả">
                <input type="button" class="btn btn-danger" value="Xóa các mục đã chọn">
                <a href="index.php?act=add-prd"><input class="btn btn-success" type="button" value="Nhập thêm"></a>
            </div>
            <?php
                if(isset($inner)&&$inner!=""){
                    echo '<div class="notification mt-3">'.$inner.'</div>';
                }
                ?>
        </div>
    </div>
</div>
