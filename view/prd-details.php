    <div class="container">
        <div class="row">
            <div class="box-left col-8">
                <div class="prd-details">
                    <div class="box-title">
                        <h2>Chi tiết sản phẩm</h2>
                    </div>
                    <?php
                        extract($one_prd);
                        $img_prd = $img_path_folder.$img;
                    ?>
                    <div class="box-details align-items-center">
                        <div class="row">
                            <div class="prd-img col-4">
                                <img src="<?=$img_prd?>" alt="">
                            </div>
                            <div class="prd-info col-8">
                                <div class="prd-name">
                                    <h3><span></span><?=$prd_name?></h3>
                                </div>
                                <div class="price">
                                    <p>Giá sản phẩm: <span>$<?=$price?></span></p>
                                </div>
                                <div class="desc">
                                    <p>Mô tả sản phẩm: <span><?=$desc?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                    <script>
                    $(document).ready(function(){
                        $("#comment").load("view/comment/comment-form.php", {idpro: <?=$pro_id?>})
                    });
                    </script>
                    <div id="comment"></div>
                </div>
                <div class="prd-similar">
                    <div class="box-title">
                        <h2>Sản phẩm cùng loại</h2>
                    </div>
                    <div class="row box-similar">
                        <?php
                            foreach ($prd_similar as $prd) {
                                extract($prd);
                                // $similar_path=$img_path_folder;
                                $img_similar = $img_path_folder.$img;
                              
                                $link_prd = "index.php?act=prd-details&id=".$pro_id;
                                echo'
                                        <div class="similar-items col-4">
                                            <div class="sml-item-img text-center">
                                                <img src="'.$img_similar.'" alt="">
                                            </div>
                                            <div class="sml-item-info">
                                                <div class="sml-item-name">
                                                    <a href="'.$link_prd.'"><h3>'.$prd_name.'</h3></a>
                                                </div>
                                                <div class="sml-item-price">
                                                    <p>$'.$price.'</p>
                                                </div>
                                            </div>
                                        </div>
                                ';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
                include 'right-box.php';                
            ?>
        </div>
    </div>
    
