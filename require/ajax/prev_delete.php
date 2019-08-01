<?php

    include '../../config.php';

    $id = $_GET['id'];

    $query = "SELECT * FROM tbl_prod_review WHERE ref_id = '$id'";

    $res = $viewUser->get_query($query);
    foreach($res as $row) {
        $rev_id = $row['id'];
    }

    $del = $sqlUser->delete("tbl_prod_review",$rev_id);

    if ($del) {
        header("location:".BASE_URL."view/product_details.php?id=$id");
    }
    
?>