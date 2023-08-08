<?php
    include "../model/pdo.php";
    include "../model/categories.php";
    include "../model/products.php";
    include "../model/account.php";
    include "../model/comment.php";
    include "../model/statitis.php";
    include "header.php";

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            // controller categories
            case 'add-cate':
                //Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['addnew']) && ($_POST['addnew'])){
                    $cate_name = $_POST['cate_name'];
                    insert_cate($cate_name);
                    $inner = "Thêm thành công";
                }
                include "categories/add.php";
                break;
            case 'cate-list':
                $cate_list = load_list_cate();
                include "categories/cate-list.php";
                break;
            case 'delete-cate':
                if(isset($_GET['id'])&&($_GET['id'])>0){
                    $count=count_prd_on_cate($_GET['id']);
                    if($count==0){
                        $inner = "Xóa thành công";
                        delete_cate($_GET['id']);
                    }else{
                        $inner = "Vui lòng chuyển sản phẩm sang danh mục khác hoặc xóa sản phẩm trong danh mục để thực hiện được chức năng này !";
                    }
                }
                $cate_list = load_list_cate();
                include "categories/cate-list.php";
                break;
            case 'edit-cate':
                if(isset($_GET['id'])&&($_GET['id'])>0){
                    $category = load_one($_GET['id']);
                }
                include "categories/edit.php";
                break;
            case 'update-cate':
                if(isset($_POST['update-cate']) && ($_POST['update-cate'])){
                    $cate_name = $_POST['cate_name'];
                    $cate_id = $_POST['cate-id'];
                    update_cate($cate_id,$cate_name);
                    $inner = "Cập nhật thành công";
                }
                $cate_list = load_list_cate();
                include "categories/cate-list.php";
                break;
            // controller products
            case 'add-prd':
                //Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['addnew']) && ($_POST['addnew'])){
                    $cate_id=$_POST['cate-id'];
                    $prd_name = $_POST['prd_name'];
                    $price = $_POST['price'];
                    $desc = $_POST['desc'];
                    $filename=$_FILES['img']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES['img']['name']);
                    if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
                        echo "The file" . htmlspecialchars(basename($_FILES['img']['name']));
                    } else {
                        echo "";
                    }
                    insert_prd($prd_name,$price,$filename,$desc,$cate_id);
                    $inner = "Them thanh cong";
                }
                $cate_list = load_list_cate();
                include "products/add.php";
                break;
            case 'prd-list':
                if(isset($_POST['ok']) && ($_POST['ok'])){
                    $keyword = $_POST['keyword'];
                    $cate_id = $_POST['cate-id'];
                }else{
                    $keyword ="";
                    $cate_id = 0;
                }
                $cate_list = load_list_cate();
                $prd_list = load_list_prd( $keyword, $cate_id);
                include "products/prd-list.php";
                break;
            case 'delete-prd':
                if(isset($_GET['id'])&&($_GET['id'])>0){
                    delete_prd($_GET['id']);
                }
                $cate_list = load_list_cate();
                $prd_list = load_list_prd("",0);
                include "products/prd-list.php";
                break;
            case 'edit-prd':
                if(isset($_GET['id'])&&($_GET['id'])>0){
                    $product = load_one_prd($_GET['id']);
                }
                $cate_list = load_list_cate();
                include "products/edit.php";
                break;
            case 'update-prd':
                if(isset($_POST['update-prd']) && ($_POST['update-prd'])){
                    $cate_id = $_POST['cate-id'];
                    $prd_name = $_POST['prd_name'];
                    $prd_id = $_POST['prd_id'];
                    $price = $_POST['price'];
                    $desc = $_POST['desc'];
                    $filename=$_FILES['img']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES['img']['name']);
                    if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
                        // echo "The file" . htmlspecialchars(basename($_FILES['img']['name']));
                    } else {
                        // echo "";
                    }
                    update_prd($prd_id,$prd_name,$price,$filename,$desc,$cate_id);
                    $inner = "Cập nhật thành công";
                }
                $cate_list = load_list_cate();
                $prd_list = load_list_prd("",0);
                include "products/prd-list.php";
                break;
            case 'customer-list':
                $customer_list = load_all_customer();
                include "account/list.php";
                break;
            case 'delete-customer':
                if(isset($_GET['id']) && $_GET['id']>0){
                    delete_acc($_GET['id']);
                }
                $customer_list=load_all_customer();
                include "account/list.php";
                break;
            case 'cmt-list':
                $cmt_list = load_all_cmt(0);
                include "comment/list.php";
                break;
            case 'delete-cmt':
                if(isset($_GET['id'])&&($_GET['id'])>0){
                    delete_cmt($_GET['id']);
                }
                $cmt_list = load_all_cmt(0);
                include "comment/list.php";
                break;
            case 'statitis':
                $stt_list = load_all_statitis();
                include "statitis/list.php";
                break;
            case 'viewchart':
                $stt_list = load_all_statitis();
                include "statitis/chart.php";
                break;
            default:
                include "home.php";
                break;
        }
    }

    include "home.php";
    include "footer.php";

?>