<?php

    include '../../config.php';

    $get_customer = $_GET['customer'];

    $query2 = "SELECT * FROM tbl_cart WHERE `customer_name` = '$get_customer'";

    $res2 = $viewUser->get_query($query2);

    foreach($res2 as $row2) {
        $id_cart = $row2['ref_id'];
        $title = $row2['title'];
        $title_desc = $row2['title_desc'];
        $price = $row2['price'];
        $qty = $row2['quantity'];

        $add_arr = array();
        $add_arr['ref_id'] = $id_cart;
        $add_arr['user_name'] = $get_customer;
        $add_arr['title'] = $title;
        $add_arr['price'] = $price;
        $add_arr['quantity'] = $qty;

        $res = $sqlUser->create("tbl_user_items",$add_arr);

        if ($res) {
            $query = "DELETE FROM tbl_cart WHERE customer_name = '$get_customer'";
            $viewUser->get_query($query);

            header("location:".BASE_URL."view/items.php");

        } else {
            echo "error";
        }
    }

?>