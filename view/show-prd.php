<div class="container">
    <div class="box-show space">
        <div class="title">
            <h2>SẢN PHẨM</h2>
        </div>
        <div class="row">
            <div class="box-left col-8">
                    <div class="categories">
                        <div class="btn-group dropend">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Chọn thể loại game
                            </button>
                            <ul class="cate_menu dropdown-menu">
                                <li><a href="index.php?act=show-prd&id=0">Tất cả</a></li>
                                <?php
                                    foreach ($cate_arr as $cate) {
                                        extract($cate);
                                        $link_cate ="index.php?act=show-prd&id=".$id;
                                        echo '<li><a href="'.$link_cate.'">'.$cate_name.'</a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="product row">
                        <?php
                            if(count($list_prd)>0){
                                foreach($list_prd as $prd){
                                    extract($prd);
                                    $link_prd = "index.php?act=prd-details&id=".$pro_id;
                                    $img_prd = $img_path_folder.$img;
                                    echo'
                                    <div class="col-4">
                                        <div class="prd-items">
                                            <a href="#"><img class="img-fluid w-100" src="'.$img_prd.'" alt=""></a>
                                            <div class="price">
                                                <p>$'.$price.'</p>
                                            </div>
                                            <div class="prd-name">
                                                <a href="'.$link_prd.'"> <h3>'.$prd_name.'</h3></a>
                                            </div>
                                        </div>
                                    </div>
                                                                  
                                    ';
                                }
                            }else{
                                echo'<p>Rất tiếc, không có sản phẩm bạn cần tìm</p>';
                            }
                        ?>
                    </div>
                </div>
            <?php
                include 'right-box.php';                
            ?>
     </div>
    </div>
</div>