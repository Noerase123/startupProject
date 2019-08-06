<?php

include '../../config.php';

  if (isset($_POST['addbtn']))
  {

    $insert_array = array(
      'top_name'         => $sqlUser->escapeString($_POST['top_name'])
    );

    if ($sqlUser->create("tbl_top_categories", $insert_array))
    {
      // header("location:".ADMIN_URL."product_category.php?cat_created=1");
      echo "Category successfully added ";
    }
    else {
        echo "sorry please try again.";
    }
  }

?>