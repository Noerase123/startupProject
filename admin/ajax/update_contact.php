<?php

// require_once '../../config.php';

$update_id = array(
    'id' => $_GET['id']
);

$tbl = "tbl_contact_info";

  if (isset($_POST['update_contact']))
  {
          $update_array2 = array(
            'address'     => $sqlUser->escapeString($_POST['add']),
            'tel_no'      => $sqlUser->escapeString($_POST['tel']),
            'fax_no'      => $sqlUser->escapeString($_POST['fax']),
            'mobile_no'   => $sqlUser->escapeString($_POST['mobile']),
            'email'       => $sqlUser->escapeString($_POST['email'])
          );

          if ($sqlUser->update($tbl, $update_array2, $update_id))
          {
            $get_id = $_GET['id'];
            // $id_get = md5($get_id);
            header("location:".ADMIN_URL."contact_us.php?contact_info_updated=".$get_id);
          }

  
  }

?>