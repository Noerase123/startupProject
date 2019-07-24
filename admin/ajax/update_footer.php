<?php

// require_once '../../config.php';

$update_id = array(
    'id' => $_GET['id']
);

$tbl = "tbl_web_content";

  if (isset($_POST['update_footer']))
  {
        // $fnm1=$_FILES["nav_image"]["name"];
        $fnm2=$_FILES["home_image"]["name"];
        
        if ($fnm1 == "" && $fnm2 == "") {

          $update_array2 = array(
            'footer_text'  => $sqlUser->escapeString($_POST['footer']),
            'why_desc'     => $sqlUser->escapeString($_POST['text_display'])
          );

          
          if ($sqlUser->update($tbl, $update_array2, $update_id))
          {
            header("location:".ADMIN_URL."footer.php?footer_updated");
          }

        } else {

        $v1 = rand(1111,9999);
        $v2 = rand(1111,9999);

        $v3 = $v1.$v2;
        $v3 = md5($v3);
        // $fnm = $_FILES["image"]["name"];
        $dst = "../uploads/".$v3.$fnm1;
        $image_upload1 = "uploads/".$v3.$fnm1;
        move_uploaded_file($_FILES["nav_image"]["tmp_name"],$dst);

        
        $dst = "../uploads/".$v3.$fnm2;
        $image_upload2 = "uploads/".$v3.$fnm2;
        move_uploaded_file($_FILES["home_image"]["tmp_name"],$dst);

        $update_array = array(
            'footer_text'  => $sqlUser->escapeString($_POST['footer']),
            'why_desc'     => $sqlUser->escapeString($_POST['text_display'])
          );

    if ($sqlUser->update($tbl, $update_array, $update_id))
    {
      header("location:".ADMIN_URL."footer.php?footer_updated");
    }
        }
  
  }

?>