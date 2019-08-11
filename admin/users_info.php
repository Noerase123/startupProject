<?php

include '../config.php';

    $table = "tbl_user";

    $id = array(
        'id' => $_GET['id']
    );
    
    $res = $viewUser->select_where($table, $id);

    foreach ($res as $data) {
        $name = $data['firstname'];
        $email = $data['username'];
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
    <script src="../js/jquery-3.3.1.js"></script>
</head>
<body>

<?php 
include 'require/nav.php';

?>

<div class="container">
    <br>
<h1><?php echo $name; ?> <small>(<?php echo $email;?>)</small></h1>


            <?php 
            $query = "SELECT sum(price) FROM tbl_user_items WHERE `user_name` = '$name'";
            $res = $viewUser->get_query($query);

            foreach($res as $item) {
                $total = $item['sum(price)'];

                $consume = number_format($total,2);
            }
            ?>

            <div class="options">
                <h3>Total bought: P<?php echo $consume;?></h3>  
            </div>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp <a style="color:#000;text-decoration:none;" href="<?php echo ADMIN_URL.'user.php';?>">End-users</a> > <?php echo $name; ?></h4></div>

    <div class="content">
        <div class="row">
            
            <div class="options">
                <a class="delete" onclick="return confirm('Do you want to delete this user?')" href="<?php echo ADMIN_URL.'ajax/delete_user.php?id='.$pid;?>">Delete User</a>
            </div>

            <style>
            table tr th {
                width:10%;
                padding:20px 0px;
            }
            </style>

            <div style="padding: 20px;float:left;">
                
                <div style="padding:10px;width:1000px;background-color:#ddd;">

                    <table>
                        <tr>
                            <th>ref ID</th>
                            <th>Name</th>
                            <th>price</th>
                            <th>quantity</th>
                            <th>date</th>
                        </tr>

            <?php
                $query = "SELECT * FROM tbl_user_items WHERE `user_name` = '$email'";

                $res = $viewUser->get_query($query);

                foreach($res as $row) {
                    $ref_id = $row['ref_id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $quantity = $row['quantity'];
                    $date = $row['date_created'];

                    $date_ = $viewUser->datetime($date);

                    ?>
                    <tr>
                        <th><?php echo $ref_id;?></th>
                        <th><?php echo $title;?></th>
                        <th><?php echo $price;?></th>
                        <th><?php echo $quantity;?></th>
                        <th><?php echo $date_;?></th>
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