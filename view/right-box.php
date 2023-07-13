    <div class="box-right col-4">
        <div class="sign-in">
            <div class="box-title">
                <h3>Đăng nhập</h3>
            </div>
            <?php
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
            ?>
                <div class="box-acc">
                    <div class="box-acc-items mb-3">
                        <p>Xin chào <i class="fa fa-user-alt"></i> <?=$user_name?></p>
                    </div>
                    <div class="box-acc-items mb-3"><a href="index.php?act=rec-pass">Quên mật khẩu >></a></div>
                    <div class="box-acc-items mb-3"><a href="index.php?act=edit-acc">Cập nhật tài khoản >></a></div>
                    <?php if($role == 1) : ?>
                        <div class="box-acc-items mb-3"><a href="admin/index.php">Đăng nhập Admin >></a></div>
                    <?php endif; ?>
                    <div class="box-acc-items mb-3"><a href="index.php?act=logout">Thoát >></a></div>
                </div>
            <?php
            }else{
            ?>
                <form action="index.php?act=sign-in" method="post" class="form-sign">
                    <div class="mb-3">
                        <label  class="form-label">Tên đăng nhập</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mật khẩu</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ghi nhớ tài khoản</label>
                    </div>
                    <input type="submit" name="sign-in" class="btn btn-primary mb-3" value="Đăng Nhập"></input>
                    <div class="mb-3 form-link">
                        <a href="index.php?act=register">Đăng ký tài khoản</a>
                    </div>
                    <div class="mb-3 form-link">
                        <a href="index.php?act=rec-pass">Quên mật khẩu</a>
                    </div>
                </form>
            <?php
            }
            ?>
            </div>
            <div class="top-prd">
                <div class="box-title">
                    <h3>Top 10 game yêu thích</h3>
                </div>
                <div class="top-box">
                    <?php
                        foreach($prd_top as $prd){
                            extract($prd);
                            $link_prd = "index.php?act=prd-details&id=".$pro_id;
                            $img_prd = $img_path_folder.$img;
                            echo '
                            <div class="top-items d-flex align-items-center" height="30px">
                                <img class="img-fluid" src="'.$img_prd.'" alt="">
                                <div class="item-name">
                                    <a href="'.$link_prd.'"><h4>'.$prd_name.'</h4></a>
                                </div>
                            </div>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


