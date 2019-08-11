<?php 

    include '../../config.php';

    $session_name = $_SESSION['user']['name'];

    if (isset($_POST['submit_contact'])) {

        $contact = $_POST['contact'];
        $address = $_POST['address'];

        $table = "tbl_user";

        $qry = "SELECT * FROM $table WHERE username = '$session_name'";
        $res = $viewUser->get_query($qry);
        foreach($res as $row) {
            $id = $row['id'];
        }

        $update_id = array(
            'id' => $id
        );

        $update_arr = array(
            'contact_no' => $sqlUser->escapeString($contact),
            'address' => $sqlUser->escapeString($address)
        );

        $dude = $sqlUser->update($table,$update_arr,$update_id);

        if ($dude) {
            echo 'Successfully Updated';
        }
        else {
            echo 'somethings wrong';
        }
        
    }

?>