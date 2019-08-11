<?php

include '../../config.php';

$session_name = $_SESSION['user']['name'];

if (isset($_POST['namebirth_btn'])) {
    
    $change_firstname = $_POST['change_firstname'];
    $change_lastname = $_POST['change_lastname'];
    $change_birth = $_POST['change_birth'];

    $table = "tbl_user";

    $qry = "SELECT * FROM $table WHERE username= '$session_name'";
    $res = $viewUser->get_query($qry);
    foreach($res as $row) {
        $id = $row['id'];
    }

    $update_id = array(
        'id' => $id
    );

    $update_arr = array(
        'firstname' => $sqlUser->escapeString($change_firstname),
        'lastname' => $sqlUser->escapeString($change_lastname),
        'birthdate' => $sqlUser->escapeString($change_birth)
    );

    $res = $sqlUser->update($table, $update_arr, $update_id);
    
    if ($res) {
        echo 'Successfully changed!';
    }
}

?>