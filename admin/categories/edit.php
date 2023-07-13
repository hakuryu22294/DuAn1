<?php
    if(is_array($category)){
        extract($category);
    }
?>
<div class="container">
    <div class="box-admin space">
        <div class="box-title">
            <h2>THÊM MỚI LOẠI HÀNG HÓA</h2>
        </div>
        <div class="frmcontent">
            <form action="index.php?act=update-cate" method="post">
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Mã loại</label>
                <input type="number" name="id" class="form-control" disabled>
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Tên loại</label>
                <input type="text" name="cate_name" class="form-control" value="<?php if(isset($cate_name)&&($cate_name!=="")) echo $cate_name;?>">
            </div>
            <div class="">
                <input type="hidden" name="cate-id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                <input type="submit" class="btn btn-success" name="update-cate" id="" value="Cập nhật">
                <input type="reset" class="btn btn-secondary" name="reset" id="" value="Nhập lại">
                <a href="index.php?act=cate-list"><input type="button" class="btn btn-primary" value="Danh sách"></a>
            </div>
            <?php
                if(isset($inner) && $inner!=""){
                    echo '<div class="notification mt-4">'.$inner.'</div>';
                }
            ?>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=update-cate" method="post">
            <div class="row mb-10">
                Mã loại <br>
                <input type="text" name="cate_id" id="" disabled>
            </div>
            <div class="row mb-10">
                Tên loại <br>
                <input type="text" name="cate_name" id="" value="<?php if(isset($cate_name)&&($cate_name!=="")) echo $cate_name;?>">
            </div>
            <div class="row mb-10">
                <input type="hidden" name="cate-id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                <input type="submit" name="update-cate" id="" value="Cập nhật">
                <input type="reset" name="" id="" value="Nhập lại">
                <a href="index.php?act=cate-list"><input type="button" value="Danh sách"></a>
            </div>
            <?php
                if(isset($inner) && $inner!=""){
                    echo $inner;
                }
            ?>
        </form>
    </div>
</div>