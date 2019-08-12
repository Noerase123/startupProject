<?php 

include '../../config.php';

    $customer = $_GET['customer'];

    $table = "tbl_customer_received";

    $sql = "SELECT * FROM tbl_deliver_process WHERE `user_name` = '$customer'";
    $res = $viewUser->get_query($sql);
    foreach($res as $row) {
        $ref_id = $row['id'];
        $username = $row['user_name'];
        $title = $row['title'];
        $price = $row['price'];
        $quantity = $row['quantity'];

        $deliver_arr = array();

        $deliver_arr['ref_id'] = $ref_id;
        $deliver_arr['user_name'] = $username;
        $deliver_arr['title'] = $title;
        $deliver_arr['price'] = $price;
        $deliver_arr['quantity'] = $quantity;
    
        $created = $sqlUser->create($table,$deliver_arr);

        $sqlUser->delete('tbl_deliver_process',$ref_id);
    }

        if ($created) {
            header("location:".ADMIN_URL);
        } else {
            echo 'not good';
        }

    
    


    

?>