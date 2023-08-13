<?php
function totalOrder() {
    $total_full =0;

    foreach($_SESSION['cart'] as $cart){
        $total = $cart[3] * $cart[4];
        $total_full += $total;
    }
    return $total_full;
}

function insert_bill($name, $email, $address, $tel, $date_order, $totalOrder) {
    $sql = "INSERT INTO bill(`bill_name`, `bill_email`, `bill_address`, `bill_tel`, `date`, total)
            VALUES ('$name', '$email', '$address', '$tel', '$date_order', $totalOrder)";
    return pdo_execute_id($sql);
}
function insert_cart($id_user,$id_pro,$img,$name,$price,$amount,$cost,$billID) {
    $sql = "INSERT INTO `cart`(id_product, id_user,`img`,`name`, price,amount,cost,id_order) 
    VALUES ($id_pro,$id_user,'$img','$name',$price,$amount,$cost,$billID)";
    return pdo_execute($sql);
}
function load_one_bill($id){
    $sql = "SELECT * FROM bill WHERE 1";
    if($id>0){
        $sql.=" AND id=".$id;
    }
    $sql.= " ORDER BY id DESC";
    $bill = pdo_query($sql);
    return $bill;
}

function load_one_cart($id_order){
    $sql = "SELECT * FROM cart WHERE id_order = ".$id_order;
    $billct = pdo_query($sql);
    return $billct;
}

function delete_bill($id){
    $sql =  "DELETE FROM bill WHERE id=".$id;
    pdo_execute($sql);
}
?>