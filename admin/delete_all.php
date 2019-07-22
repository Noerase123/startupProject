<?php

include '../config.php';

$id=$_GET["id"];

// mysqli_query($link,"delete from products where id=$id");

$sqlUser->delete_all("tbl_stack");
?>

<script type="text/javascript">
    window.location="<?php echo ADMIN_URL; ?>index.php";
</script>