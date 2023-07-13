<div class="container">
    <div class="box-admin space">
        <div class="box-title">
            <h1>DANH SÁCH BÌNH LUẬN</h1>
        </div>
        <div class="row frmcontent">
                <div class="row mb-10 frmcate-list">
                    <table class="table">
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>NỘI DUNG BÌNH LUẬN</th>
                            <th>NGƯỜI BÌNH LUẬN</th>
                            <th>MÃ SẢN PHÂM</th>
                            <th>NGÀY BÌNH LUẬN</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($cmt_list as $cmt){
                                extract($cmt);
                                $user_login = get_user($id_user);
                                extract($user_login);
                                $delete_cmt = 'index.php?act=delete-cmt&id='.$cmt_id;
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$cmt_id.'</td>
                                        <td>'.$content.'</td>
                                        <td>'.$user_name.'</td>
                                        <td>'.$id_pro.'</td>
                                        <td>'.$date_comment.'</td>                             
                                        <td>
                                            <a href="'.$delete_cmt.'"><input onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\')" class="btn btn-danger" type="button" value="Xóa"></a>
                                        </td>
                                    </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="">
                    <input type="button" class="btn btn-primary" value="Chọn tất cả">
                    <input type="button" class="btn btn-secondary" value="Bỏ chọn tất cả">
                    <input type="button" class="btn btn-danger" value="Xóa các mục đã chọn">
                </div>
        </div>
    </div>
</div>