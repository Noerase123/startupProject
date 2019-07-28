<?php

include '../config.php';

    $table = "tbl_reviews";

    $id = array(
        'id' => $_GET['id']
    );
    
    $res = $viewUser->select_where($table, $id);

    foreach ($res as $data) {
        $name = $data['name'];
        $review = $data['description'];
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
<h1><?php echo $name; ?></h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp <a style="color:#000;text-decoration:none;" href="<?php echo ADMIN_URL.'reviews.php';?>">Reviews</a> > <?php echo $name; ?></h4></div>

    <div class="content">
        <div class="row">
            
            
            <div class="options">
                <!-- <a class="update" href="<?php echo ADMIN_URL.'ajax/review_accepted.php?id='.$pid;?>">Accept</a> -->
                <a class="delete" onclick="return confirm('Do you want to delete this review?')" href="<?php echo ADMIN_URL.'ajax/delete_review.php?id='.$pid;?>">Delete</a>
            </div>

            <div style="padding: 20px;float:left;">
                
                <div style="padding:10px;width:1000px;background-color:#ddd;">
                <h4>Message : </h4> <?php echo $review; ?>
                </div>
                
            </div>
            
        
    </div>
    </div>

    
</div>
    
</body>
</html>