<div class="container">
    <div class="box-admin space">
        <div class="box-title">
            <h2>THÊM MỚI LOẠI HÀNG HÓA</h2>
        </div>
        <div class="frmcontent">
            <form action="index.php?act=add-cate" method="post">
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Mã loại</label>
                <input type="number" name="id" class="form-control" disabled>
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Tên loại</label>
                <input type="text" name="cate_name" class="form-control">
            </div>
            <div class="">
                <input type="submit" class="btn btn-success" name="addnew" id="" value="Thêm mới">
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
