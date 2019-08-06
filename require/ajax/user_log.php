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
        $add_arr['ref_id'] = $sqlUser->escapeString($id_cart);
        $add_arr['user_name'] = $sqlUser->escapeString($get_customer);
        $add_arr['title'] = $sqlUser->escapeString($title);
        $add_arr['price'] = $sqlUser->escapeString($price);
        $add_arr['quantity'] = $sqlUser->escapeString($qty);

        $res1 = $sqlUser->create("tbl_user_items",$add_arr);

        if ($res1) {

            $item = "SELECT quantity FROM tbl_stack WHERE id = '$id_cart'";
            
            $item2 = $viewUser->get_query($item);

            $it = $item2->fetch_assoc();
                $quant = $it['quantity'] - $qty;
                // print_r($quant);

            $update_arr = array(
                'quantity' => $sqlUser->escapeString($quant)
            );

            $upd_id = array();
            $upd_id['id'] = $id_cart;

            $res2 = $sqlUser->update("tbl_stack",$update_arr,$upd_id);
            
            $query = "DELETE FROM tbl_cart WHERE customer_name = '$get_customer'";
            $res3 = $viewUser->get_query($query);

            if ($res2 && $res3){
                header("location:".BASE_URL."view/items.php");
            }

            

        } else {
            echo "error";
        }
    }

?>