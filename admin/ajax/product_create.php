<?php

include '../../config.php';

    $success_message = '';

  if (isset($_POST['create']))
  {
        $v1 = rand(1111,9999);
        $v2 = rand(1111,9999);

        $v3 = $v1.$v2;
        $v3 = md5($v3);
        $fnm= $_FILES["image"]["name"];
        $dst= "../uploads/".$v3.$fnm;
        $image= "uploads/".$v3.$fnm;
        move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

    $insert_array = array(
      'title'         => $sqlUser->escapeString($_POST['title']),
      'title_desc'    => $sqlUser->escapeString($_POST['titledesc']),
      'image'         => $sqlUser->escapeString($image),
      'some_text'     => $sqlUser->escapeString($_POST['sometext']),
      'description'   => $sqlUser->escapeString($_POST['desc']),
      'category'      => $sqlUser->escapeString($_POST['cat']),
      'price'         => $sqlUser->escapeString($_POST['price']),
      'quantity'      => $sqlUser->escapeString($_POST['quantity'])
    );

    if ($sqlUser->create("tbl_stack", $insert_array))
    {
      header("location:".ADMIN_URL."index.php?created=1");
    }
    else {
        echo "sorry please try again.";
    }
  }

?>