<?php

include '../../config.php';

$id=$_GET["id"];

// mysqli_query($link,"delete from products where id=$id");

if ($sqlUser->delete("tbl_cart", $id)) {

    // header("location:".BASE_URL."view/cart.php?deleted=$id");
    echo 'Item in cart deleted';

}
?>