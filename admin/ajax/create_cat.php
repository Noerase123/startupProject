<?php

// include '../../config.php';

  if (isset($_POST['create']))
  {

    $insert_array = array(
      'cat_name'         => $sqlUser->escapeString($_POST['cat_name'])
    );

    if ($sqlUser->create("tbl_categories", $insert_array))
    {
      header("location:".ADMIN_URL."product_category.php?cat_created=1");
    }
    else {
        echo "sorry please try again.";
    }
  }

?>