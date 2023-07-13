<?php
    function insert_cmt($content,$id_pro,$id_user,$date_comment){
        $sql = "INSERT INTO comments(content,id_pro,id_user,date_comment) VALUES('$content','$id_pro','$id_user','$date_comment')";
        pdo_execute($sql);
    }

    function load_all_cmt($id_pro){
        $sql =  "SELECT * FROM comments WHERE 1";
        if($id_pro>0){
            $sql.=" AND id_pro='".$id_pro."'";
        }
        $sql.=" order by cmt_id desc";
        $list_cmt = pdo_query($sql);
        return $list_cmt;
    }

    function delete_cmt($cmt_id){
        $sql =  "DELETE FROM comments WHERE cmt_id=".$cmt_id;
        pdo_execute($sql);
    }

?>