<?php
include 'config.php';

if (!isset($_SESSION['user']['name']) || isset($_SESSION['user']['name'])) {
  header("location:".BASE_URL."view/items.php");
}

?>