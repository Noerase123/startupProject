<?php

include '../../config.php';

  if (isset($_POST['addbtn']))
  {
    $top_cat = $_POST['top_cat'];

    $res = $viewUser->get_data("tbl_top_categories");

    foreach($res as $data) {
      if ($top_cat == $data['top_name']) {
        $cat_top = $data['id'];
      }
    }

    

    $insert_array = array(
      'cat_name'         => $sqlUser->escapeString($_POST['cat_name']),
      'ref_id'         => $sqlUser->escapeString($cat_top)
    );

    if ($sqlUser->create("tbl_categories", $insert_array))
    {
      // header("location:".ADMIN_URL."product_category.php?cat_created=1");
      echo "Category successfully added ";
    }
    else {
        echo "sorry please try again.";
    }
  }

?>