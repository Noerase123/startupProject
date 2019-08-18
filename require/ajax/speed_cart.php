<?php

include '../../config.php';

if (isset($_SESSION['user']['name'])) {
    $name = $_SESSION['user']['name'];
}

$get_id = $_GET['id'];

$id = array(
    'id' => $get_id
);

$rest = $viewUser->select_where("tbl_stack", $id);
foreach($rest as $row) {
    $image = $row['image'];
    $title = $row['title'];
    $title_desc = $row['title_desc'];
    $price = $row['price'];
}

if (isset($_POST['btncart']) ) {

    $qty_add = 1;

   $add = array(
     'ref_id'         => $sqlUser->escapeString($get_id),
     'customer_name'  => $sqlUser->escapeString($_SESSION['user']['name']),
     'image'      => $sqlUser->escapeString($image),
     'title'      => $sqlUser->escapeString($title),
     'title_desc' => $sqlUser->escapeString($title_desc),
     'price'      => $sqlUser->escapeString($price),
     'quantity'      => $sqlUser->escapeString($qty_add)
   );

   $res = $sqlUser->create("tbl_cart",$add);

   if ($res) {

        echo 'success';
   }

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