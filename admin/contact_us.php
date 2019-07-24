<?php

include '../config.php';

    $table = "tbl_contact_info";
    
    $res = $viewUser->get_data($table);

    foreach ($res as $data) {
        $add = $data['address'];
        $tel = $data['tel_no'];
        $fax = $data['fax_no'];
        $mobile = $data['mobile_no'];
        $email = $data['email'];
        $pid = $data['id'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Website - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="admin_css/main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php 
include 'require/nav.php';

?>

<div class="container">
    <br>
<h1>Contact Us</h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp Dashboard > Contact Us</h4></div>

<?php
    include 'require/notif.php';
?>

    <div class="content">
        <div class="row">
            
            
            <div class="options">
                <a class="update" href="<?php echo ADMIN_URL.'contact_update.php?id='.$pid;?>">Update</a>
                <!-- <a class="delete" onclick="return confirm('Do you want to delete this review?')" href="<?php echo ADMIN_URL.'ajax/delete_cat.php?id='.$pid;?>">Delete</a> -->
            </div>

            <div style="padding:20px;">
                
                <div style="padding:10px;width:100%;background-color:#ddd;">
                
                <h4>Address :</h4>
                    <p><?php echo $add; ?></p>
                <h4>Telephone No. :</h4>
                    <p><?php echo $tel; ?></p>
                <h4>Fax No. :</h4>
                    <p><?php echo $fax; ?></p>
                <h4>Mobile No. :</h4>
                    <p><?php echo $mobile; ?></p>
                <h4>Email Address :</h4>
                    <p><?php echo $email; ?></p>

                </div>
                
            </div>
            
        
    </div>
    </div>

    
</div>
    
</body>
</html>