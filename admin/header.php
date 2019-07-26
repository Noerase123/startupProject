<?php

include '../config.php';

    $table = "tbl_web_content";
    
    $res = $viewUser->get_data($table);

    foreach ($res as $row) {
        $nav1 = $row['nav_menu1'];
        $nav2 = $row['nav_menu2'];
        $nav3 = $row['nav_menu3'];
        $nav4 = $row['nav_menu4'];
        $nav_logo = $row['nav_logo'];
        $home_logo = $row['home_logo'];
        $why = $row['why_desc'];
        $head_image = $row['header_image'];
        // $footer = $row['footer_text'];
        $pid = $row['id'];
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
<h1>Header Settings</h1>

<?php
    include 'require/notif.php';
?>
<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp <a style="color:#000;text-decoration:none;" href="<?php echo ADMIN_URL.'home.php'; ?>">Dashboard</a> > Header Settings</h4></div>



    <div class="content">
        <div class="row">
            
            
            <div class="options">
                <a class="update" href="<?php echo ADMIN_URL.'header_update.php?id='.$pid;?>">Update</a>
                <!-- <a class="delete" onclick="return confirm('Do you want to delete this review?')" href="<?php echo ADMIN_URL.'ajax/delete_cat.php?id='.$pid;?>">Delete</a> -->
            </div>

            <div style="padding: 20px;">
                
                <div style="padding:10px;width:100%;background-color:#ddd;">
                
                <h4>Header Image</h4>
                <img src="../<?php echo $head_image;?>" style="height:250px; width:100%;">

                <h4>Navigation bar :</h4>
                    <p style="width:100%;background-color:#f1f1f1;padding:20px;"><?php echo $nav1.' | '.$nav2.' | '.$nav3.' | '.$nav4; ?></p>
                
                <h4>Logos :</h4>

                        <p>Nav-Header Logo</p>
                        <img src="../<?php echo $nav_logo;?>" style="height:50px; width:100px;">
                        <p>Home Logo</p>
                        <img src="../<?php echo $home_logo;?>" style="height:100px; width:200px;">
                
                <h4>Description (why) :</h4>
                    <p><?php echo $why; ?></p>

                <!-- <h4>Footer (Copyrights) :</h4>
                    <p><?php echo $footer; ?></p> -->
                </div>
                
            </div>
            
        
    </div>
    </div>

    
</div>
    
</body>
</html>