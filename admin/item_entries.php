<?php

include '../config.php';
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

$sql = "SELECT sum(price) FROM tbl_customer_received";
$res = $viewUser->get_query($sql);
foreach($res as $row) {
    $tot_price = $row['sum(price)'];
    $tot = number_format($tot_price,2);
}
?>

<div class="container">
    <br>
<h1>Item Entries</h1>
<h4>Revenue : P<?php echo $tot;?></h4>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp <a style="color:#000;text-decoration:none;" href="<?php echo ADMIN_URL;?>">Dashboard</a> > Item Entries</h4></div>

    <div class="content">
        <div class="row">
            
            <!-- <div class="options">
                <a class="update" href="<?php echo ADMIN_URL.'product_update.php?id='.$pid;?>">Update</a>
                <a class="delete" onclick="return confirm('Do you want to delete including the content?')" href="<?php echo ADMIN_URL.'ajax/delete_cat.php?id='.$pid;?>">Delete Category</a>
                <a class="delete" onclick="return confirm('Do you want to Empty this <?php echo $ptitle; ?> Category?')" href="<?php echo ADMIN_URL.'ajax/delete.php?id='.$pid;?>">Delete Content</a>
            </div> -->

            <div style="padding: 20px;">
                
                <div style="padding:10px;width:100%;background-color:#ddd;">

<?php 
    
// $name = $_SESSION['user']['name'];
$tbl = "tbl_customer_received";
$res_received = $viewUser->get_data($tbl);
?>

        <table style="width:100%;">
            <tr class="menus">
                <th><h3>User</h3></th>
                <th><h3>Title</h3></th>
                <th><h3>Price</h3></th>
                <th><h3>Quantity</h3></th>
                <th><h3>Date</h3></th>
            </tr>
    <?php
    foreach($res_received as $row) {
        $title = $row['title'];
        $price = $row['price'];
        $pricee = number_format($price,2);
        $qty = $row['quantity'];
        $datee = $row['date_created'];
        $date = $viewUser->datetime($datee,2);
        $user = $row['user_name'];

        ?>
            <tr>
                <th><h3><?php echo $user; ?></h3></th>
                <th><h3><?php echo $title; ?></h3></th>
                <th><p>P <?php echo $pricee; ?></p></th>
                <th><p><?php echo $qty; ?></p></th>
                <th><p><?php echo $date; ?></p></th>
            </tr>
        <?php
    }
    ?>    
        </table>
                </div>
                
                
                
                

            </div>
            
        
    </div>
    </div>

    
</div>
    
</body>
</html>