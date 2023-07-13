<div class="container">
    <div class="box-admin space">
        <div class="box-title">
            <h2>THÊM MỚI SẢN PHẨM</h2>
        </div>
        <div class="frmcontent">
            <form action="index.php?act=add-prd" method="post" enctype="multipart/form-data"> 
                <div class="mb-4">
                    <label class="form-label">Tên loại</label>
                    <select class="form-select" name="cate-id" id="">
                        <?php
                            foreach($cate_list as $cate){
                                extract($cate);
                                echo '<option value='.$id.'>'.$cate_name.'</option>';    
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label  class="form-label">Tên sản phẩm</label>
                    <input type="text" name="prd_name" class="form-control">
                </div>
                <div class="mb-4">
                    <label  class="form-label">Giá</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="mb-4">
                    <label  class="form-label">Hình ảnh</label>
                    <input type="file" name="img" class="form-control">
                </div>
                <div class="mb-4">
                    <label  class="form-label">Mô tả</label>
                    <textarea class="form-control" name="desc" id="" cols="20" rows="10"></textarea>
                </div>
                <div class="">
                    <input type="submit" class="btn btn-success" name="addnew" id="" value="Thêm mới">
                    <input type="reset" class="btn btn-secondary" name="reset" id="" value="Nhập lại">
                    <a href="index.php?act=prd-list"><input type="button" class="btn btn-primary" value="Danh sách"></a>
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

