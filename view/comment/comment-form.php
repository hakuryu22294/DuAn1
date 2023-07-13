<?php
    session_start();
    include '../../model/pdo.php';
    include '../../model/comment.php';
    include '../../model/account.php';
    $id_pro=$_REQUEST['idpro'];
    $list_cmt = load_all_cmt($id_pro);
?>
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- STYLE -->
    <link rel="stylesheet" href="../css/style.css">
  
</head>
<body>
    <div class="prd-cmt">
        <div class="box-title">Bình luận sản phẩm</div>
        <div class="box-cmt">
            <div class="box-mess">
                <?php
                    foreach($list_cmt as $cmt){
                        extract($cmt);
                        $user_login = get_user($id_user);
                        extract($user_login);
                        echo '
                            <div class="row">
                                <div class="col-6"><p>'.$content.'</p></div>
                                <div class="col-2"><p>'.$user_name.'</p></div>
                                <div class="col-4"><p>'.$date_comment.'</p></div>
                            </div>
                        ';

                    }
                ?>
            </div>
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="form">
                <input type="hidden" name="idpro" value="<?=$id_pro;?>">
                <div class="row">
                    <?php if(isset($_SESSION['user'])) :?>
                        <div class="col-10">
                            <input type="text" name="content" class="form-control">
                        </div>
                        <div class="col-2">                       
                            <input type="submit" class="btn btn-primary" value="Gửi bình luận" name="send-cmt">                      
                        </div>
                    <?php else: ?>
                        <p>Vui lòng đăng nhập để thực hiện chức năng bình luận</p>
                    <?php endif;?>
                   
                </div>
            </form>
        </div>
        <?php
            if(isset($_POST['send-cmt']) && ($_POST['send-cmt'])){
                $content=$_POST['content'];
                $id_prd=$_POST['idpro'];
                $id_user=$_SESSION['user']['user_id'];
                $date_cmt = date('h:i:sa d/m/Y');
                insert_cmt($content, $id_prd, $id_user, $date_cmt);
                header('location:'.$_SERVER['HTTP_REFERER']);
            }
        ?>
    </div>
</body>
</html>