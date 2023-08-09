<section id="banner" class="space">
        <div class="container">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="./img/naraka.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Nakara SESSON 8: Recording</h5>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum minima aliquid ab.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="./img/mortal kombat 11.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Mortal Kombat 11</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo doloribus rem iste amet quod.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./img/ori.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Ori</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, corrupti?</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span ><i class="fa fa-angle-left"></i></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span ><i class="fa fa-angle-right"></i></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </section>
<section id="article">
        <div class="container">
            <div class="title">
                <h2>POPULAR SHOW</h2>
            </div>
            <div class="row">
                <div class="box-left col-8">
                    <div class="categories">
                        <div class="btn-group dropend">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Chọn thể loại game
                            </button>
                            <ul class="cate_menu dropdown-menu">
                                <li><a href="index.php?act=show-prd">Tất cả</a></li>
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
                            foreach($prd_new as $prd){
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
                                            <form action="index.php?act=cart" method="post">
                                            <input type="hidden" name="id" value="'.$pro_id.'">
                                            <input type="hidden" name="name" value="'.$prd_name.'">
                                            <input type="hidden" name="img" value="'.$img_prd.'">
                                            <input type="hidden" name="price" value="'.$price.'">\
                                            <input  type="submit" name="addCart" class="btn btn-success" value="Mua ngay">
                                          </form>
                                        </div>
                                    </div>
                                </div>                               
                                ';
                            }
                        ?>
                    </div>
                  
                </div>
            <?php
                include 'right-box.php';
            ?>