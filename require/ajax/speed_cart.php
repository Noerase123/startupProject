<?php

include '../../config.php';

if (isset($_SESSION['user']['name'])) {
    $name = $_SESSION['user']['name'];
}

if (isset($_POST['btncart']) ) {

    $query = "SELECT * FROM tbl_cart WHERE `customer_name`='$name' ORDER BY id DESC";

    $res = $viewUser->get_query($query);
    foreach($res as $row) {
      $get_name = $row['customer_name'];
    }
    
    $num = $res->num_rows;
    
    }
    
    echo $num;
}



?>