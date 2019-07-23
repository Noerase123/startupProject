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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php 
include 'require/nav.php';

$res = $viewUser->get_data("tbl_stack");
    $count = $res->num_rows;
?>

<div class="container">
    <br>
<h1><a style="color:#000;text-decoration:none;" href="products.php">Products (<?php echo $count; ?> Items)</a></h1>

<?php
    include("require/notif.php");
?>

    <div class="search">
      <form method="GET">
        <input style="margin-top:20px;" type="text" placeholder="Search..." name="query">
        <button type="submit" name="searchbtn"><i class="fa fa-search"></i></button>
      </form>
    </div><br><br>
    <div class="addbtn">
    <a style="" href="product_create.php"><i class="fa fa-plus"></i> Add Item</a></div>
    
    <div class="content">
        <div class="row">

<!-- ================================SEARCH SECTION======================================== -->
        <?php 
        if (isset($_GET['query'])) {
                
            $term = $_GET['query'];
            $table = "tbl_stack";
            $search = "category";
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
                    $title = $row['title'];
                    $author = $row['title_desc'];
                    $id = $row['id'];
                    ?>
                    <div class="column">
                        <a href="product_details.php?id=<?php echo $id;?>">
                            <div class="card">
                                <h3><?php echo $title; ?></h3>
                                <p>by: <?php echo $author; ?></p>
                            </div>
                        </a>
                    </div>
                    <?php
                }
            }
            else {
                echo '<h3 style="color:red;">No Records Found </h3> &nbsp';
            }
        }

        
        else {
            $table = "tbl_stack";

            $res = $viewUser->get_data($table);

            while ($row = $res->fetch_assoc()) {
                $title = $row['title'];
                $author = $row['title_desc'];
                $id = $row['id'];
        ?>
            <div class="column">
                <a href="product_details.php?id=<?php echo $id;?>">
                    <div class="card">
                        <h3><?php echo $title; ?></h3>
                        <p>by: <?php echo $author; ?></p>
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