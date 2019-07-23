<?php

include '../../config.php';

$id=$_GET["id"];

// mysqli_query($link,"delete from products where id=$id");

if ($sqlUser->delete("tbl_stack", $id)) {

    header("location:".ADMIN_URL."products.php?deleted=$id");

}
?>