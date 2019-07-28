<?php

include '../config.php';
session_destroy();

header("location:".BASE_URL."view/items.php");

// header("refresh:1");
exit;
?>
