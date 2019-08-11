<?php

include '../../config.php';

$id = $_GET['id'];

$id_arr = array(
    'id' => $id
);


$table = "tbl_pending_reviews";

$res = $viewUser->select_where($table, $id_arr);

    foreach ($res as $data) {
        $name = $_SESSION['user']['firstname'];
        $review = $data['description'];

        $add_arr = array(
            'name' => $name,
            'description' => $review
        );
    }

$res2 = $sqlUser->create("tbl_reviews",$add_arr);

    if ($res2) {
        $res3 = $sqlUser->delete($table, $id);

        if($res3) {
            header("location:".ADMIN_URL."review_pending.php");
        }
    }

?>