<?php

include '../config.php';

include 'ajax/del_cart.php';

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
<h1>Cart</h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp <a style="color:#000;text-decoration:none;" href="<?php echo ADMIN_URL.'home.php';?>">Dashboard</a> > Cart</h4></div>

    <div class="content">
        <div class="row">
            
            
            <div class="options">
                <form action="" method="post">
                    <input class="delete" style="padding:15px;margin-left:20px;color:white;border:none;" type="submit" name="delete" id="delete" value="Delete">
                
            </div>

            

            <div style="padding: 20px;">
                
                <div style="padding:10px;width:100%;background-color:#ddd;">

                    <table border=1>
                        <tr style="height:60px;">
                            <th style="width:60px;">Select</th>
                            <th style="width:80px;">Ref_id</th>
                            <th style="width:150px;">Name</th>
                            <th style="width:150px;">Title</th>
                            <th style="width:150px;">Author</th>
                            <th style="width:150px;">Price</th>
                            <th style="width:150px;">Quantity</th>
                        </tr>

                <?php
                $table = "tbl_cart";

                $res = $viewUser->get_data($table);
                
                $num = $res->num_rows;
                
                if ($num > 0) {
                

                    foreach($res as $cart) {
                        $ref_id = $cart['ref_id'];
                        $name = $cart['name'];
                        $title = $cart['title'];
                        $title_desc = $cart['title_desc'];
                        $price = $cart['price'];
                        $quantity = $cart['quantity'];
                        $id = $cart['id'];
                ?>
                        <tr style="height:60px;">
                            <th><input type="checkbox" name="select[]" id="select[]" value="<?php echo $id; ?>"></th>
                            <th><?php echo $ref_id; ?></th>
                            <th><?php echo $name; ?></th>
                            <th><?php echo $title; ?></th>
                            <th><?php echo $title_desc; ?></th>
                            <th><?php echo $price; ?></th>
                            <th><?php echo $quantity; ?></th>
                        </tr>

                <?php  } ?>

<?php } else { echo 'No Cart Content Available'; }?>
                    </table>


                </div>
            </div>

            
            </form>
            
        
    </div>
    </div>

    
</div>
    
</body>
</html>