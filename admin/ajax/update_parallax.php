<?php

// require_once '../../config.php';

$update_id = array(
    'id' => $_GET['id']
);

$tbl = "tbl_parallax";

  if (isset($_POST['update_parallax']))
  {
        $fnm = $_FILES["image1"]["name"];
        $fnm2 = $_FILES["image2"]["name"];
        $fnm3 = $_FILES["image3"]["name"];

    if (empty($fnm) && empty($fnm2) && empty($fnm3)) {
      
      header("location:".ADMIN_URL."parallax.php?parallax_no_updated");
    }else {
        
        $v1 = rand(1111,9999);
        $v2 = rand(1111,9999);

        $v3 = $v1.$v2;
        $v3 = md5($v3);

        $dst1 = "../uploads/".$v3.$fnm;
        $image_upload = "uploads/".$v3.$fnm;
        move_uploaded_file($_FILES["image1"]["tmp_name"],$dst1);
        
        $dst2 = "../uploads/".$v3.$fnm2;
        $image_upload2 = "uploads/".$v3.$fnm2;
        move_uploaded_file($_FILES["image2"]["tmp_name"],$dst2);
        
        $dst3 = "../uploads/".$v3.$fnm3;
        $image_upload3 = "uploads/".$v3.$fnm3;
        move_uploaded_file($_FILES["image3"]["tmp_name"],$dst3);

    $update_array = array(
      'image'         => $sqlUser->escapeString($image_upload),
      'image2'         => $sqlUser->escapeString($image_upload2),
      'image3'         => $sqlUser->escapeString($image_upload3),
    );

    if ($sqlUser->update($tbl, $update_array, $update_id))
    {
      header("location:".ADMIN_URL."parallax.php?parallax_updated");
    }
  }
  
  }

?>