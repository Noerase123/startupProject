<?php

include '../../config.php';

$id=$_GET["id"];

// mysqli_query($link,"delete from products where id=$id");

if ($sqlUser->delete("tbl_reviews", $id)) {

    header("location:".ADMIN_URL."reviews.php?review_deleted=$id");

}
?>