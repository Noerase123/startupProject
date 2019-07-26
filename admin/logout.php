<?php

session_abort();
session_destroy();

include '../config.php';

header("location:".ADMIN_URL);
?>