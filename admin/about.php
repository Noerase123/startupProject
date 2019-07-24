<?php

include '../config.php';

    $table = "tbl_about";
    
    $res = $viewUser->get_data($table);

    foreach ($res as $data) {
        $name = $data['name'];
        $some = $data['some_text'];
        $abouts = $data['description'];
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
<h1>About Us</h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp Dashboard > About Us</h4></div>

<?php
    include 'require/notif.php';
?>

    <div class="content">
        <div class="row">
            
            
            <div class="options">
                <a class="update" href="<?php echo ADMIN_URL.'about_update.php?id='.$pid;?>">Update</a>
                <!-- <a class="delete" onclick="return confirm('Do you want to delete this review?')" href="<?php echo ADMIN_URL.'ajax/delete_cat.php?id='.$pid;?>">Delete</a> -->
            </div>

            <div style="padding: 20px;">
                
                <div style="padding:10px;width:100%;background-color:#ddd;">
                
                <h4>Title :</h4>
                    <p><?php echo $name; ?></p>
                <h4>Some Text :</h4>
                    <p><?php echo $some; ?></p>
                <h4>Abouts :</h4>
                    <p><?php echo $abouts; ?></p>
                </div>
                
            </div>
            
        
    </div>
    </div>

    
</div>
    
</body>
</html>