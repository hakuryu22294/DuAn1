<div class="container">
    <div class="box-admin space">
        <div class="box-title">
            <h2>DANH SÁCH LOẠI HÀNG HÓA</h2>
        </div>
        </table>
        <div class="frmcontent">
            <div class=" frmcate-list">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col"></th></th>
                        <th scope="col">MÃ LOẠI</th>
                        <th scope="col">TÊN LOẠI</th>
                        <th scope="col">TÙY CHỌN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($cate_list as $cate) {
                                extract($cate);
                                $edit_cate = 'index.php?act=edit-cate&id='.$id;
                                $delete_cate = 'index.php?act=delete-cate&id='.$id;
                                echo '<tr>
                                        <td scope="row"><input type="checkbox" name="" id=""></td>
                                        <td>' . $id . '</td>
                                        <td>' . $cate_name . '</td>
                                        <td>
                                            <a href="'.$edit_cate.'"><input type="button" class="btn btn-success" value="Sửa"></a>
                                            <a href="'.$delete_cate.'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\')"><input type="button" class="btn btn-danger" value="Xóa"></a>
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
                <a href="index.php?act=add-cate"><input class="btn btn-success" type="button" value="Nhập thêm"></a>
            </div>
            <?php
                if(isset($inner)&&$inner!=""){
                    echo '<div class="notification mt-3">'.$inner.'</div>';
                }
                ?>
        </div>
    </div>
</div>