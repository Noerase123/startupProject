<?php

// require_once '../../config.php';

$update_id = array(
    'id' => $_GET['id']
);

$tbl = "tbl_web_content";

  if (isset($_POST['update_footer']))
  {
        $fnm=$_FILES["footer_image"]["name"];
        
        if ($fnm == "") {

          $update_array2 = array(
            'footer_text'  => $sqlUser->escapeString($_POST['footer']),
            'text_display'     => $sqlUser->escapeString($_POST['text_display'])
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
        $dst = "../uploads/".$v3.$fnm;
        $image_upload = "uploads/".$v3.$fnm;
        move_uploaded_file($_FILES["footer_image"]["tmp_name"],$dst);

        $update_array = array(
            'footer_text'  => $sqlUser->escapeString($_POST['footer']),
            'text_display'     => $sqlUser->escapeString($_POST['text_display']),
            'footer_image'     => $sqlUser->escapeString($image_upload)
          );

    if ($sqlUser->update($tbl, $update_array, $update_id))
    {
      header("location:".ADMIN_URL."footer.php?footer_updated");
    }
        }
  
  }

?>