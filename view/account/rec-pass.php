<div class="container ">
    <div class="row">
        <div class="box-left col-8">
            <div class="box-register">
                <div class="box-title">
                    <h1>Quên mật khẩu</h1>
                </div>                   
                    <div class="form-res">
                        <form action="index.php?act=rec-pass" method="post" class="form-sign">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <input type="submit" name="send-email" class="btn btn-primary" value="Gửi"> </input>
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
<!-- <div class="row mb">
            <div class="left-box mr">
                <div class="row mb">
                    <div class="box-title">
                        <h1>KHÔI PHỤC MẬT KHẨU</h1>
                    </div>                   
                       <div class="row box-content frmcontent form-acc">
                        <form action="index.php?act=rec-pass" method="post" class="mb-10">
                            <div class="row mb-10">
                                Email
                                <input type="email" name="email" class="mb-10">
                            </div>
                            <div class="row mb-10">
                                <input type="submit" value="Gửi" name="send-email">
                                <input type="reset" value="Nhập lại">
                            </div>
                            </form>
                            <h5 class="notification">
                                <?php
                                    if(isset($inner)&&$inner!=""){
                                        echo $inner;
                                    }
                                ?>
                            </h5>
                       </div>
                    </div>
                </div>
            </div>
            <div class="right-box">
                <?php
                    include 'view/right-box.php';                
                ?>
            </div>
        </div> -->