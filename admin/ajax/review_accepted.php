<?php

include '../../config.php';

$id = $_GET['id'];

$table = "tbl_pending_reviews";

    if ($sqlUser->delete($table, $id)) {

        header("location:".ADMIN_URL."reviews.php?accepted");
    }

    

?>