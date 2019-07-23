<?php

// require_once '../../config.php';

$update_id = array(
    'id' => $_GET['id']
);

$tbl = "tbl_stack";

  if (isset($_POST['update']))
  {
        $fnm=$_FILES["image"]["name"];
        
        if ($fnm == "") {

          $update_array2 = array(
            'title'         => $sqlUser->escapeString($_POST['title']),
            'title_desc'    => $sqlUser->escapeString($_POST['titledesc']),
            'some_text'     => $sqlUser->escapeString($_POST['sometext']),
            'description'   => $sqlUser->escapeString($_POST['desc']),
            'category'   => $sqlUser->escapeString($_POST['cat']),
            'price'   => $sqlUser->escapeString($_POST['price']),
            'quantity'   => $sqlUser->escapeString($_POST['quantity'])
          );

          
          if ($sqlUser->update($tbl, $update_array2, $update_id))
          {
            $get_id = $_GET['id'];
            // $id_get = md5($get_id);
            header("location:".ADMIN_URL."products.php?updated=".$get_id);
          }

        } else {

        $v1 = rand(1111,9999);
        $v2 = rand(1111,9999);

        $v3 = $v1.$v2;
        $v3 = md5($v3);
        // $fnm = $_FILES["image"]["name"];
        $dst = "../uploads/".$v3.$fnm;
        $image_upload = "uploads/".$v3.$fnm;
        move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

    $update_array = array(
      'title'         => $sqlUser->escapeString($_POST['title']),
      'title_desc'    => $sqlUser->escapeString($_POST['titledesc']),
      'image'         => $sqlUser->escapeString($image_upload),
      'some_text'     => $sqlUser->escapeString($_POST['sometext']),
      'description'   => $sqlUser->escapeString($_POST['desc']),
      'category'   => $sqlUser->escapeString($_POST['cat']),
      'price'   => $sqlUser->escapeString($_POST['price']),
      'quantity'   => $sqlUser->escapeString($_POST['quantity'])
    );

    if ($sqlUser->update($tbl, $update_array, $update_id))
    {
      $get_id = $_GET['id'];
      header("location:".ADMIN_URL."products.php?updated=$get_id");
    }
        }
  
  }

?>