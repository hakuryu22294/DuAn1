<?php
    function insert_cate($cate_name){
        $sql = "INSERT INTO categories(cate_name) VALUES('$cate_name')";
        pdo_execute($sql);
    }

    function count_prd_on_cate($cate_id){
        $sql = "SELECT count(*) FROM products WHERE cate_id = '$cate_id'";
        $count_prd = pdo_query_value($sql);
        return $count_prd;
    }

    function delete_cate($id){
        $sql = "DELETE FROM categories WHERE id=".$id;
        pdo_execute($sql);
        
    }

    function load_list_cate(){
        $sql =  "SELECT * FROM categories order by id desc";
        $cate_list = pdo_query($sql);
        return $cate_list;
    }

    function load_one($id){
        $sql =  "SELECT * FROM categories WHERE id=".$id;
        $category = pdo_query_one($sql);
        return $category;
    }

    function update_cate($id, $cate_name){
        $sql = "UPDATE categories SET cate_name='".$cate_name."' WHERE id=".$id;
        pdo_execute($sql);
    }
?>