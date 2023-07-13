<?php
    function insert_prd($prd_name,$price,$filename,$desc,$cate_id){
        $sql = "INSERT INTO products(prd_name,price,img,`desc`,cate_id) VALUES('$prd_name','$price','$filename','$desc','$cate_id')";
        pdo_execute($sql);
    }

    function delete_prd($id){
        $sql =  "DELETE FROM products WHERE pro_id=".$id;
        pdo_execute($sql);
    }

    function load_list_prd($keyword, $cate_id){
        $sql =  "SELECT * FROM products where 1=1"; 

        if($keyword!==""){
            $sql.= " and prd_name like '%".$keyword."%'";
        }

        if($cate_id>0){
            $sql.= " and cate_id = '".$cate_id."'";
        }
        $sql .= " order by pro_id desc";
        $prd_list = pdo_query($sql);
        return $prd_list;
    }


    function load_one_prd($id){
        $sql =  "SELECT * FROM products WHERE pro_id=".$id;
        $product = pdo_query_one($sql);
        return $product;
    }

    function update_prd($prd_id,$prd_name,$price,$img,$desc,$cate_id){
        if($img !== ""){
            $sql = "UPDATE products SET prd_name = '".$prd_name."',price = '".$price."',img = '".$img."',`desc` = '".$desc."' ,cate_id = '".$cate_id."' where pro_id = ".$prd_id;
            pdo_execute($sql);
        }else{
            $sql = "UPDATE products SET prd_name = '".$prd_name."',price = '".$price."',`desc` = '".$desc."',cate_id = '".$cate_id."' where pro_id = ".$prd_id;
            pdo_execute($sql);
        }
    }

    function load_all_products_home(){
        $sql =  "SELECT * FROM products where 1 order by pro_id desc limit 0,9"; 
        $prd_list_home = pdo_query($sql);
        return $prd_list_home;
    }

    function load_all_products_top(){
        $sql =  "SELECT * FROM products where 1 order by view desc limit 0,10"; 
        $prd_list_top = pdo_query($sql);
        return $prd_list_top;
    }

    function similar_prd($id,$cate_id){
        $sql = "SELECT * FROM products where cate_id=".$cate_id." AND pro_id <> ".$id;
        $prd = pdo_query($sql);
        return $prd;
    }

    function load_cate_name($cate_id){
        if($cate_id>0){
            $sql = "SELECT * FROM categories WHERE  id=".$cate_id;
            $category = pdo_query_one($sql);
            extract ($category);
            return $cate_name;
        }else{
            return '';
        }
    }
?>