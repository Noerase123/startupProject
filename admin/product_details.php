<?php

include '../config.php';

    $table = "tbl_stack";

    $id = array(
        'id' => $_GET['id']
    );
    
    $res = $viewUser->select_where($table, $id);

    foreach ($res as $data) {
        $ptitle = $data['title'];
        $title_desc = $data['title_desc'];
        $some_text = $data['some_text'];
        $desc = $data['description'];
        $image = $data['image'];
        $category = $data['category'];
        $datee = $data['date_created'];
        $price = $data['price'];
        $quantity = $data['quantity'];
        $pid = $data['id'];

        $money = number_format($price,2);
        $qty = number_format($quantity);
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

<div class="header">
    <p><a style="color:#fff;text-decoration:none;" href="<?php echo ADMIN_URL;?>">Welcome to Admin</a></p>
    <div class="head-content">
        <p>admin</p>
        <p>settings</p>
    </div>
</div>

<nav>
    <ul>

    <p style="font-size:25px;font-weight:bold;">Products</p>
    <?php 
        $tbl = "tbl_stack";
        $res = $viewUser->get_data($tbl);
        while($row = $res->fetch_assoc()) {

            $title = $row['title'];
            $id = $row['id'];
    ?>
        <li><a href="<?php echo ADMIN_URL.'product_details.php?id='.$id; ?>"><?php echo ucfirst($title); ?></a></li>

    <?php
        }
    ?>
    </ul>
</nav>

<div class="container">
    <br>
<h1><?php echo $title; ?></h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp <a style="color:#000;text-decoration:none;" href="<?php echo ADMIN_URL.'products.php';?>">Products</a> > <?php echo $title; ?></h4></div>

    <div class="content">
        <div class="row">
            
            
            <div class="options">
                <a class="update" href="">Update</a>
                <a class="delete" href="<?php echo ADMIN_URL.'delete.php?id='.$pid;?>">Delete</a>
            </div>

            <div style="padding: 20px;">
                
                <div style="padding:10px;width:100%;background-color:#ddd;">
                
                <img src="../<?php echo $image;?>" style="margin-left:10px;float:right;width:50%" alt="">

                <div style="padding:20px;width:100%;background-color:#f1f1f1;">
                    <h3>Price : <?php echo $money ? $money.' pesos'  : '0.00' ;?></h3>
                
                    <h3>Quantity : <?php echo $qty ? $qty.' pieces' : '0' ;?></h3>
                </div>

                <h3>Category : <?php echo $category;?></h3>

                <h3>Author : <?php echo $title_desc;?></h3>
                
                <h3>Tags : <?php echo $some_text;?></h3>
                
                <h3 style="height:280px;overflow:auto;">Description : <?php echo $desc;?></h3>

                </div>
                
                
                
                

            </div>
            
        
    </div>
    </div>

    
</div>
    
</body>
</html>