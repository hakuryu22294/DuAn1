<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT GG -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP 5 -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- STYLE -->
    <link rel="stylesheet" href="./css/style.css">
  
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg my-nav">
            <div class="container">
              <a class="navbar-brand" href="index.php">Divine<i class="fab fa-angellist"></i><span>game</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                  <li class="nav-item">
                    <a class="nav-link " href="index.php">Trang chủ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Giới thiệu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Liên Hệ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Góp ý</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Hói đáp</a>
                  </li>
                </ul>
              </div>
              <form action="index.php?act=product" class="d-flex" role="search" method="post">
                <input class="form-control me-2" name="keyword" type="search" placeholder="Tìm sản phẩm..." aria-label="Search">
                <input class="btn btn-outline-success" type="submit" value="Search"></input>
              </form>
            </div>
          </nav>
    </header>
    
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="boxcenter">
        <div class="row mb header">
            <h1>SIÊU THỊ TRỰC TUYẾN</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="index.php?act=about">Giới thiệu</a></li>
                <li><a href="index.php?act=contact">Liên hệ</a></li>
                <li><a href="index.php?act=feedback">Góp ý</a></li>
                <li><a href="index.php?act=qa">Hỏi đáp</a></li>
            </ul>
        </div> -->