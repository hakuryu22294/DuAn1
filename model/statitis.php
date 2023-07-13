<?php
    function load_all_statitis(){
        $sql = "SELECT categories.cate_name AS catename, categories.id AS cateid, COUNT(products.pro_id) AS countprd, MIN(products.price) AS minprice, MAX(products.price) AS maxprice, AVG(products.price) AS avgprice";
        $sql .= " FROM products LEFT JOIN categories ON categories.id = products.cate_id";
        $sql .= " GROUP BY categories.id ORDER BY categories.id DESC";
        $list_stt = pdo_query($sql);
        return $list_stt;
    }
?>