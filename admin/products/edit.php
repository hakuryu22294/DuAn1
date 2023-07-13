<?php
    if(is_array($product)){
        extract($product);
    }
    $imgpath="../upload/".$img;
    if(is_file($imgpath)){
        $img_prd="<img src='".$imgpath."' height='80px'>";
    }else{
        $img_prd='Không có ảnh';
    }
    
?>
<div class="container">
    <div class="box-admin space">
        <div class="box-title">
            <h2>CẬP NHẬT HÀNG HÓA</h2>
        </div>
        <div class="frmcontent">
            <form action="index.php?act=update-prd" method="post" enctype="multipart/form-data"> 
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
                    <input type="text" name="prd_name" class="form-control"value="<?=$prd_name?>">
                </div>
                <div class="mb-4">
                    <label  class="form-label">Giá</label>
                    <input type="text" name="price" class="form-control"value="<?=$price?>">
                </div>
                <div class="mb-4">
                    <label  class="form-label">Hình ảnh</label>
                    <input type="file" name="img" class="form-control">
                    <?=$img_prd?>
                </div>
                <div class="mb-4">
                    <label  class="form-label">Mô tả</label>
                    <textarea class="form-control" name="desc" id="" cols="20" rows="10"><?=$desc?></textarea>
                </div>
                <div class="">
                    <input type="hidden" name="prd_id" value="<?php if(isset($pro_id)&&($pro_id>0)) echo $pro_id;?>">
                    <input type="submit" class="btn btn-success" name="update-prd" id="" value="Cập nhật">
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

