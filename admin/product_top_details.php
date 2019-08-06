<?php

include '../config.php';

    $table = "tbl_categories";

    $get_id = $_GET['id'];

    $id = array(
        'ref_id' => $get_id
    );
    
    $res = $viewUser->select_where($table, $id);

    foreach ($res as $data) {
        $ptitle = $data['cat_name'];
        $pid = $data['id'];
    }
    
    $top_cat = $viewUser->get_query("SELECT * FROM tbl_top_categories WHERE id = '$get_id'");
    foreach($top_cat as $cat) {
    $title = $cat['top_name'];
    $top_id = $cat['id'];
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
$res = $viewUser->get_query("SELECT * FROM tbl_categories WHERE ref_id = '$get_id'");
    $count = $res->num_rows;
?>

<div class="container">
    <br>
<h1><?php echo $title;?> (<?php echo $count; ?> Items)</h1>

<?php
include 'require/notif.php';
?>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp <a style="color:#000;text-decoration:none;" href="<?php echo ADMIN_URL.'product_category.php';?>"><?php echo $title; ?></a> >All</h4></div>


    <div class="search">
      <form method="GET">
        <input style="margin-top:20px;" type="text" placeholder="Search..." name="query">
        <button type="submit" name="searchbtn"><i class="fa fa-search"></i></button>
      </form>
    </div><br><br>
    <div class="addbtn"><a href="<?php echo ADMIN_URL.'ajax/delete_top.php?id='.$top_id;?>" onclick="return confirm('Delete this Category?')">Delete Category<i class="fa fa-plus"></i></a></div>
    


    <div class="content">
        <div class="row">

<!-- ================================SEARCH SECTION======================================== -->
        <?php 
        if (isset($_GET['query']) && isset($_GET['searchbtn'])) {
                
            $term = $_GET['query'];
            $table = "tbl_categories";
            $search = "cat_name";
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
                    $title = $row['cat_name'];
                    $id = $row['id'];
                    ?>
                    <div class="column">
                        <a href="product_cat_details.php?id=<?php echo $id;?>">
                            <div class="card">
                                <h3><?php echo $title; ?></h3>
                            </div>
                        </a>
                    </div>
                    <?php
                }
            }
        }

        
        else {
            $table = "SELECT * FROM tbl_categories WHERE ref_id = '$get_id'";

            $res = $viewUser->get_query($table);

            while ($row = $res->fetch_assoc()) {
                $title = $row['cat_name'];
                $id = $row['id'];
        ?>
            <div class="column">
            <a href="product_cat_details.php?id=<?php echo $id;?>">
                    <div class="card">
                        <h3><?php echo $title; ?></h3>
                    </div>
                    </a>
            </div>
        <?php 
        }
        }
        ?>
            
    </div>
    </div>

    
</div>
    
</body>
</html>