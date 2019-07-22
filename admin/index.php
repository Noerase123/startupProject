<?php

include '../config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="admin_css/main.css" />
    <script src="main.js"></script>
</head>
<body>

<div class="header">
    <p>Welcome to Admin</p>
    <div class="head-content">
        <p>admin</p>
        <p>settings</p>
    </div>
</div>

<?php 
include 'require/nav.php';
?>


<div class="container">

    <div class="content">
        <div class="row">

        <?php 
        $tbl = "SELECT * FROM tbl_menus";
        $res = $viewUser->get_query($tbl);
        while($row = $res->fetch_assoc()) {

            $menu = $row['menu_name'];
            $link = $row['menu_link'];
    ?>

            <div class="column">
                <a href="<?php echo $link.'.php'; ?>">
                <div class="card">
                <h3><?php echo strtoupper($menu); ?></h3>
                <!-- <p><a href="#link">See more</a></p> -->
                </div>
                </a>
            </div>

    <?php
        }
    ?>
            
    </div>
    </div>

    
</div>
    
</body>
</html>