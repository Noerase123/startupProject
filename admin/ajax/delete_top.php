<?php

include '../../config.php';

$id=$_GET["id"];

// $cat = $viewUser->get_query("SELECT cat_name FROM tbl_categories WHERE id = '$id' ");

// mysqli_query($link,"delete from products where id=$id");
// $query = "DELETE FROM tbl_stack WHERE category = '$cat'";

$delete = $sqlUser->delete("tbl_top_categories", $id);

if ($delete) {

    header("location:".ADMIN_URL."product_category.php?delete_cat");
}
?>