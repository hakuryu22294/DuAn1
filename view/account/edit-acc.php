<div class="container ">
    <div class="row">
        <div class="box-left col-8">
            <div class="box-register">
                <div class="box-title">
                    <h1>Cập nhật tài khoản</h1>
                </div>                   
                    <div class="form-res">
                         <?php
                            if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                                extract($_SESSION['user']);
                            }
                        ?>
                        <form action="index.php?act=edit-acc" method="post" class="form-sign">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="<?=$email?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
                                <input type="text" name="user" class="form-control" value="<?=$user_name?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                <input type="password" name="password" class="form-control" value="<?=$password?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                                <input type="tel" name="tel" class="form-control" value="<?=$tel?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                                <input type="text" name="address" class="form-control" value="<?=$address?>">
                            </div>
                                <input type="hidden" name="user_id" value="<?=$user_id?>">
                                <input type="submit" name="update" class="btn btn-primary" value="Cập Nhật"  onclick="return confirm('Bạn có chắc chắn muốn cập nhật?')"> </input>
                                <input type="reset" class="btn btn-secondary" value="Nhập lại"></input>
                        </form>
                        <?php
                            if(isset($inner)&&$inner!=""){
                                echo '<div class="notification mt-3">"'.$inner.'"</div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            include 'view/right-box.php';      
            ?>
        </div>
    </div>
</div>
