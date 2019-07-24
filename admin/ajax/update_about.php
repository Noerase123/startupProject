<?php

// require_once '../../config.php';

$update_id = array(
    'id' => $_GET['id']
);

$tbl = "tbl_about";

  if (isset($_POST['update_about']))
  {
        $fnm=$_FILES["image"]["name"];
        
        if ($fnm == "") {

          $update_array2 = array(
            'name'         => $sqlUser->escapeString($_POST['name']),
            'some_text'     => $sqlUser->escapeString($_POST['some_text']),
            'description'   => $sqlUser->escapeString($_POST['desc'])
          );

          
          if ($sqlUser->update($tbl, $update_array2, $update_id))
          {
            $get_id = $_GET['id'];
            // $id_get = md5($get_id);
            header("location:".ADMIN_URL."about.php?about_updated=".$get_id);
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
        'name'         => $sqlUser->escapeString($_POST['name']),
        'some_text'     => $sqlUser->escapeString($_POST['some_text']),
        'description'   => $sqlUser->escapeString($_POST['desc'])
    );

    if ($sqlUser->update($tbl, $update_array, $update_id))
    {
      $get_id = $_GET['id'];
      header("location:".ADMIN_URL."about.php?about_updated=$get_id");
    }
        }
  
  }

?>