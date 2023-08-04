<?php
function totalOrder() {
    $total = 0;
    foreach($_SESSION['cart'] as $cart){
        $total = $cart[3] * $cart[4];
        $total_full += $total;
    }

    return $total_full;
}

function insert_bill($user_id,$fullname,$address,$email,$totalOrder) {
$sql = "INSERT INTO `orders`(`id_account`, `fullname`, `address`, `email`,total)
 VALUES ($user_id,'$fullname','$address','$email',$totalOrder)";
return pdo_execute_id($sql);
}
function insert_bill_detail($pro_id,$price,$amount,$billID) {
    $sql = "INSERT INTO `orders_detail`(`id_product`, `price`, `amount`,`id_order`) 
    VALUES ($pro_id,$price,$amount,$billID)";
    return pdo_execute($sql);
}
function get_bill_detail() {
    $sql = "SELECT * FROM `orders` ORDER BY id DESC LIMIT 1";
    $info = pdo_query($sql);
    return $info;

}

function getImgByID($id){
    $sql = "SELECT img FROM products WHERE id_product = $id";
    $img = pdo_query_one($sql);
    return $img;
}

?>