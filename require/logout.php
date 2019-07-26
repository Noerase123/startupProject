<?php
include '../config.php';

session_abort();
session_destroy();

header("location:".BASE_URL);

?>