<?php

include '../config.php';

$res = $viewUser->get_data("tbl_pending_reviews");
$num_row = $res->num_rows;
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
<h1>Review - Pending</h1>

<?php
include 'require/notif.php';
?>


<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp <a style="color:#000;text-decoration:none;" href="<?php echo ADMIN_URL.'reviews.php';?>">Reviews</a> > Pending</h4></div>

    <div class="search">
      <form method="GET">
        <input style="margin-top:20px;" type="text" placeholder="Search..." name="query">
        <button type="submit" name="searchbtn"><i class="fa fa-search"></i></button>
      </form>
    </div>
    <!-- <div class="addbtn"><a href="<?php echo ADMIN_URL.'cat_create.php'; ?>">Add Item<i class="fa fa-plus"></i></a></div> -->
    


    <div class="content">
        <div class="row">

<!-- ================================SEARCH SECTION======================================== -->
        <?php 
        if ($num_row > 0){

        if (isset($_GET['query']) && isset($_GET['searchbtn'])) {
                
            $term = $_GET['query'];
            $table = "tbl_pending_reviews";
            $search = "name";
            $result = $viewUser->search($term,$table,$search);
      
            $num_result = $result->num_rows;

            if ($num_result > 0) {
                    if ($num_result > 1)
                    {
                      $item = "items";
                    }
                    else {
                      $item = "item";
                    }
                    echo '<h3 style="color:green;">Results: "'.$term.'" ('.$num_result.' '.$item.')</h3>';

                while($row = $result->fetch_assoc()) {
                    $title = $row['name'];
                    $id = $row['id'];
                    ?>
                    <div class="column">
                        <a href="reviews_details.php?id=<?php echo $id;?>">
                            <div class="card">
                            <h3><small>Message From :</small> <br><?php echo $title; ?></h3>
                            </div>
                        </a>
                    </div>
                    <?php
                }
            }
        }

        // =========================================================================================        
        else {
            $table = "tbl_pending_reviews";

            $res = $viewUser->get_data($table);

            while ($row = $res->fetch_assoc()) {
                $title = $row['name'];
                $id = $row['id'];
        ?>
            <div class="column">
            <a href="reviews_details.php?id=<?php echo $id;?>">
                    <div class="card">
                        <h3><small>Message From :</small> <br><?php echo $title; ?></h3>
                    </div>
                    </a>
            </div>
        <?php 
        }
        }
        } else {
            echo '<h3>No Review Request..</h3>';
        }
        ?>
            
    </div>
    </div>

    
</div>
    
</body>
</html>