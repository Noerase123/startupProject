<?php

// require_once '../../config.php';

$update_id = array(
    'id' => $_GET['id']
);

$tbl = "tbl_web_content";

  if (isset($_POST['update_header']))
  {
        $fnm1=$_FILES["nav_image"]["name"];
        $fnm2=$_FILES["home_image"]["name"];
        $fnm3=$_FILES["header_image"]["name"];
        
        if ($fnm1 == "" && $fnm2 == "" && $fnm3 == "") {

          $update_array2 = array(
            'nav_menu1'    => $sqlUser->escapeString($_POST['nav1']),
            'nav_menu2'    => $sqlUser->escapeString($_POST['nav2']),
            'nav_menu3'    => $sqlUser->escapeString($_POST['nav3']),
            'nav_menu4'    => $sqlUser->escapeString($_POST['nav4']),
            // 'nav_logo'     => $sqlUser->escapeString($_POST['nav_image']),
            // 'home_logo'    => $sqlUser->escapeString($_POST['home_image']),
            'why_desc'     => $sqlUser->escapeString($_POST['desc'])
          );

          
          if ($sqlUser->update($tbl, $update_array2, $update_id))
          {
            header("location:".ADMIN_URL."header.php?header_updated");
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

        
        $dst2 = "../uploads/".$v3.$fnm2;
        $image_upload2 = "uploads/".$v3.$fnm2;
        move_uploaded_file($_FILES["home_image"]["tmp_name"],$dst2);

        
        $dst3 = "../uploads/".$v3.$fnm3;
        $image_upload3 = "uploads/".$v3.$fnm3;
        move_uploaded_file($_FILES["header_image"]["tmp_name"],$dst3);

        $update_array = array(
            'nav_menu1'       => $sqlUser->escapeString($_POST['nav1']),
            'nav_menu2'       => $sqlUser->escapeString($_POST['nav2']),
            'nav_menu3'       => $sqlUser->escapeString($_POST['nav3']),
            'nav_menu4'       => $sqlUser->escapeString($_POST['nav4']),
            'nav_logo'        => $sqlUser->escapeString($image_upload1),
            'home_logo'       => $sqlUser->escapeString($image_upload2),
            'header_image'    => $sqlUser->escapeString($image_upload3),
            'why_desc'        => $sqlUser->escapeString($_POST['desc'])
          );

    if ($sqlUser->update($tbl, $update_array, $update_id))
    {
      header("location:".ADMIN_URL."header.php?header_updated");
    }
        }
  
  }

?>