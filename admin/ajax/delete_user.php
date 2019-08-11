<?php

include '../../config.php';

$id = $_GET['id'];

$table = "tbl_user";

if ($sqlUser->delete($table,$id)) {

    $sql = "DELETE FROM tbl_existed_user WHERE ref_id = '$id'";
    $res = $viewUser->get_query($sql);

    if ($res) {
        header("location:".ADMIN_URL."user.php");
    }
}

?>