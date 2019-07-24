<?php

include '../config.php';

    $table = "tbl_parallax";
    
    $res = $viewUser->get_data($table);

    foreach ($res as $row) {
        $image1 = $row['image'];
        $image2 = $row['image2'];
        $image3 = $row['image3'];
        $id = $row['id'];
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
<h1>Parallax Settings</h1>

<?php
    include 'require/notif.php';
?>
<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp Dashboard > Parallax Settings</h4></div>



    <div class="content">
        <div class="row">
            
            
            <div class="options">
                <a class="update" href="<?php echo ADMIN_URL.'parallax_update.php?id='.$id; ?>">Update</a>
                <!-- <a class="delete" onclick="return confirm('Do you want to delete this review?')" href="<?php echo ADMIN_URL.'ajax/delete_cat.php?id='.$pid;?>">Delete</a> -->
            </div>

            <div style="padding: 20px;">
                
                <div style="padding:10px;width:100%;background-color:#ddd;">
                
                <h4>Parallax1</h4>
                <img src="../<?php echo $image1;?>" style="height:500px; width:100%;">
                
                <h4>Parallax2</h4>
                <img src="../<?php echo $image2;?>" style="height:500px; width:100%;">
                
                <h4>Parallax3</h4>
                <img src="../<?php echo $image3;?>" style="height:500px; width:100%;">

                
                </div>
                
            </div>
            
        
    </div>
    </div>

    
</div>
    
</body>
</html>