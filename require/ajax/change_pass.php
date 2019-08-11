<?php

include '../../config.php';

$session_name = $_SESSION['user']['name'];

    if (isset($_POST['btn_change'])) {
        
        $new_pass = $_POST['new_pass'];
        $old_pass = $_POST['old_pass'];
        $confirm_pass = $_POST['confirm_pass'];

        $new_pw = password_hash($new_pass, PASSWORD_DEFAULT);

        $table = 'tbl_user';

        $qry = "SELECT * FROM $table WHERE username = '$session_name'";
        $res = $viewUser->get_query($qry);
        foreach($res as $row) {
            $id = $row['id'];
            $pass = $row['password'];
        }

        $id_arr = array(
            'id' => $id
        );

        $update_arr = array(
            'password' => $sqlUser->escapeString($new_pw)
        );

        $pass_check = password_verify($old_pass, $pass);

        if ($pass_check != true && $old_pass=="") {
            echo '<span style="color:red">Old password is incorrect</span>';
        }
        else if (password_verify($new_pass, $pass) && $new_pass =="") {
            echo '<span style="color:red">New password must be a different characters</span>';
        }
        else if ($new_pass != $confirm_pass && $confirm_pass=="") {
            echo '<span style="color:red">Please verify your password</span>';
        }
        else {
            if ($sqlUser->update($table,$update_arr,$id_arr)) {
                echo '<span style="color:green">Successfully changed</span>';
            }
        }
    }

?>