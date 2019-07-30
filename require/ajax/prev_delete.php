<?php

    include '../../config.php';

    $id = $_GET['id'];

    $tbl = "SELECT * FROM tbl_prod_review WHERE ref_id = $id";
    $res = $viewUser->get_query($tbl);
    
    foreach($res as $row) {
        $rev_id = $row['id'];
    }    
    $tbl2 = "DELETE FROM tbl_prod_review WHERE id = '$rev_id'";
    
    if ($viewUser->get_query($tbl2)) {

      header("location:".BASE_URL."view/items.php");
    
    }
?>