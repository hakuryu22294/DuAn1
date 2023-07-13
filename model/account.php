<?php
    function insert_acc($user_name,$password,$email){
        $sql = "INSERT INTO users(user_name,`password`,email) VALUES('$user_name','$password','$email')";
        pdo_execute($sql);
    }

    function check_user($user, $password){
        $sql = "SELECT * FROM users WHERE user_name = '".$user."' AND `password` = '".$password."'";
        $user_check = pdo_query_one($sql);
        return $user_check;
    }

    function update_acc($user_id,$user_name,$password,$email,$address,$tel){
        $sql = "UPDATE users SET user_name = '".$user_name."',password = '".$password."',email = '".$email."',address = '".$address."', tel = '".$tel."' where user_id = ".$user_id;
        pdo_execute($sql);
    }

    function check_email($email){
        $sql = "SELECT * FROM users WHERE email = '".$email."'";
        $email_check = pdo_query_one($sql);
        return $email_check;
    }

    function delete_acc($user_id){
        $sql = "DELETE FROM users WHERE user_id=".$user_id;
        pdo_execute($sql);
    }

    function load_all_customer(){
        $sql =  "SELECT * FROM users order by user_id desc";
        $customer_list = pdo_query($sql);
        return $customer_list;
    }

    function get_user($id_user){
        $sql = "SELECT * FROM users WHERE user_id=".$id_user;
        $user = pdo_query_one($sql);
        return $user;
    }

?>