
<div class="container ">
    <div class="row">
        <div class="box-left col-8">
            <div class="box-register">
                <div class="box-title">
                    <h1>ĐĂNG KÝ THÀNH VIÊN</h1>
                </div>                   
                    <div class="form-res">
                        <form action="index.php?act=register" method="post" class="form-sign">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control">
                                <p class="errors"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></p>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
                                <input type="text" name="user" class="form-control">
                                <p class="errors"><?php echo isset($errors['user']) ? $errors['user'] : ''; ?></p>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                <input type="password" name="password" class="form-control">
                                <p class="errors"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></p>
                            </div>
                            <input type="submit" name="register" class="btn btn-primary" value=" Đăng ký"> </input>
                            <button type="reset" class="btn btn-secondary"> Nhập lại </button>
                            <?php
                            if(isset($inner)&&$inner!=""){
                                echo '<div class="notification mt-3">'.$inner.'</div>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            include 'view/right-box.php'; 
            ?>
        </div>
    </div>
</div>