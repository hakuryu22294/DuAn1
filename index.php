<?php
    session_start();
    include 'model/pdo.php';
    include 'model/products.php';
    include 'model/categories.php';
    include "view/header.php";
    include "global.php";
    include "model/account.php";

    $prd_new = load_all_products_home();
    $cate_arr = load_list_cate();
    $prd_top = load_all_products_top();

    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch($act){
            case 'about':
                include "view/about.php";
                break;
            case 'product':
                if((isset($_POST['keyword'])) && ($_POST['keyword'] != "")){
                    $kw = $_POST['keyword'];
                }else{
                    $kw = "";
                }
                if((isset($_GET['id'])) && ($_GET['id'] >0)){
                    $cate_id = $_GET['id'];
                }else{
                    $cate_id = 0;
                }
                $list_prd = load_list_prd($kw, $cate_id);
                $cate_name = load_cate_name($cate_id);
                include "view/show-prd.php";
                break;
            case 'show-prd':
                if((isset($_GET['id'])) && ($_GET['id'] >0)){
                    $list_prd = load_list_prd("", $_GET['id']);
                    $cate_name = load_cate_name($_GET['id']);
                    include "view/show-prd.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'prd-details':
                if((isset($_GET['id'])) && ($_GET['id'] >0)){
                    $one_prd = load_one_prd($_GET['id']);
                    extract($one_prd);
                    $prd_similar = similar_prd($pro_id,$cate_id);
                    include "view/prd-details.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'register':
                if((isset($_POST['register'])) && ($_POST['register'])){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    insert_acc($user,$password,$email);
                    $inner = "Đăng ký thành công. Vui lòng đăng nhập";
                }
                include "view/account/register.php";
                break;
            case 'sign-in':
                if((isset($_POST['sign-in'])) && ($_POST['sign-in'])){
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    $check_user = check_user($user, $password);
                    if(is_array($check_user)){
                        $_SESSION['user'] = $check_user;
                        $inner = "Bạn đã đăng nhập thành công";
                        header('location:index.php');  
                    }else{
                        $inner = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký";
                    }
                   
                }
                include "view/account/register.php";
                break;
            case 'edit-acc':
                if((isset($_POST['update'])) && ($_POST['update'])){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $user_id = $_POST['user_id'];
                    update_acc($user_id, $user, $password, $email, $address, $tel);                 
                    $_SESSION['user'] = check_user($user,$password);
                    header('location:index.php?act=edit-acc');   
                    $inner = "Bạn đã cập nhật thành công";             
                }
                include "view/account/edit-acc.php";
                break;
            case 'rec-pass':
                if((isset($_POST['send-email'])) && ($_POST['send-email'])){
                    $email = $_POST['email'];
                    $email_check = check_email($email);               
                    if(is_array($email_check)){
                        $inner = "Mật khẩu của bạn là: ".$email_check['password'];
                    }else{
                        $inner = "Email này không tồn tại !";
                    }
                }
                include "view/account/rec-pass.php";
                break;
            case 'logout':
                session_unset();
                header('location:index.php');
                break;
            case 'contact':
                include "view/contact.php";
                break;
            case 'feedback':
                include "view/feedback.php";
                break;
            case 'qa':
                include "view/qa.php";
                break;
        }
    }else{
        include "view/home.php";
    }

    include "view/footer.php";
?>