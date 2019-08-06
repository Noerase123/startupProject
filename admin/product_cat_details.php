<?php

include '../config.php';

    $table = "tbl_categories";

    $id = array(
        'id' => $_GET['id']
    );
    
    $res = $viewUser->select_where($table, $id);

    foreach ($res as $data) {
        $ptitle = $data['cat_name'];
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
<h1><?php echo $ptitle; ?></h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp <a style="color:#000;text-decoration:none;" href="<?php echo ADMIN_URL.'product_category.php';?>">Category</a> > <?php echo $ptitle; ?></h4></div>

    <div class="content">
        <div class="row">
            
            
            <div class="options">
                <!-- <a class="update" href="<?php echo ADMIN_URL.'product_update.php?id='.$pid;?>">Update</a> -->
                <a class="delete" onclick="return confirm('Do you want to delete including the content?')" href="<?php echo ADMIN_URL.'ajax/delete_cat.php?id='.$pid;?>">Delete Category</a>
                <!-- <a class="delete" onclick="return confirm('Do you want to Empty this <?php echo $ptitle; ?> Category?')" href="<?php echo ADMIN_URL.'ajax/delete.php?id='.$pid;?>">Delete Content</a> -->
            </div>

            <div style="padding: 20px;">
                
                <div style="padding:10px;width:100%;background-color:#ddd;">

<?php 
$qry = "SELECT * FROM tbl_stack WHERE category = '$ptitle'";
$res = $viewUser->get_query($qry);

$num = $res->num_rows;

if ($num > 0) {

?>

                    <table border=1>
                        <tr>
                            <th>title</th>
                            <th>Author</th>
                            <th>Image</th>
                            <th>Tags</th>
                            <th style="width:50%;">Description</th>
                        </tr>

                <?php

                while ($row = $res->fetch_assoc()) {

                $stitle = $row['title'];
                $sauthor = $row['title_desc'];
                $scat = $row['category'];
                $simage = $row['image'];
                $stags = $row['some_text'];
                $sdesc = $row['description'];

                if (strlen($sdesc) > 75) {
                    $sdesc = substr($sdesc, 0, 120).'... <br>';
                  }

                ?>

                        <tr>
                            <th><?php echo $stitle; ?></th>
                            <th><?php echo $sauthor; ?></th>
                            <th><img src="../<?php echo $simage;?>" height=100 width=100 alt=""></th>
                            <th><?php echo $stags; ?></th>
                            <th><?php echo $sdesc; ?></th>
                        </tr>

                <?php  } ?>

                    </table>


<?php } else { echo 'No Content in this Category'; }?>
                </div>
                
                
                
                

            </div>
            
        
    </div>
    </div>

    
</div>
    
</body>
</html>