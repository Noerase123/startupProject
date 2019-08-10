<?php

// include '../../config.php';

$session_name = $_SESSION['user']['name'];


    if (isset($_POST['btn_profile'])) {

        // $image = $_POST['prof_image'];
        $table = "tbl_user";

        $qry = "SELECT * FROM $table WHERE firstname = '$session_name'";
        $res = $viewUser->get_query($qry);
        foreach($res as $row) {
            $id = $row['id'];
        }

        $fnm=$_FILES["profile_pic"]["name"];
        
        $v1 = rand(1111,9999);
        $v2 = rand(1111,9999);

        $v3 = $v1.$v2;
        $v3 = md5($v3);
        // $fnm = $_FILES["image"]["name"];
        $dst = "../uploads/".$v3.$fnm;
        $image_upload = "uploads/".$v3.$fnm;
        move_uploaded_file($_FILES["profile_pic"]["tmp_name"],$dst);

    $update_id = array(
        'id' => $id
    );


    $update_array = array(
      'image'         => $sqlUser->escapeString($image_upload)
    );

    if ($sqlUser->update($table, $update_array, $update_id))
    {
      $get_id = $id;
      header("location:".BASE_URL."view/profile.php?tab=change_profile&updated=$get_id");
        // echo 'Profile Picture Changed';
    }

    }

?>