<?php
include '../config.php';


    if (isset($_POST['delete']))
    {
        $box = $_POST['select'];
        while (list($key,$val) = @each($box))
        {
          // echo $val;
            $table = "tbl_stack";
            $sqlUser->delete($table, $val);

        }
        
        if (empty($box))
            {
              header("location:".ADMIN_URL."index.php?no_select_delete");
            }
        ?>
        <script type="text/javascript">
        window.location="<?php echo ADMIN_URL; ?>index.php?selected_deleted";
        // window.location="<?php echo ADMIN_URL; ?>admin_selection.php?selected_deleted";
        </script>
        <?php
    }


$admin = "admin";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Website - <?php echo ucfirst($admin); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/admin_main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/carousel.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/login.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/view.css" />
    <script src="main.js"></script>
    <script src="jquery-3.4.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

            <?php 
                $table_name = "tbl_stack";

                $res = $viewUser->get_data($table_name);

                $num_rows = $res->num_rows;

                $num = 0;

                $message = '('.$num.'/'.$num_rows.')';


            ?>  

<div class="navi">
  <a href="<?php echo ADMIN_URL; ?>index.php"><i class="fa fa-home"></i> Home</a>
  <a href="<?php echo ADMIN_URL; ?>admin_create.php"><i class="fa fa-users"></i> Add Item</a>
  <a href="<?php echo ADMIN_URL; ?>admin_selection.php"><i class="fa fa-calendar"></i> <?php echo 'Total : '.$num_rows.' items';?></a>
  <div class="search">
          <form method="GET">
            <div style="color:#fff;margin-right:0;"><i class="fa fa-search"></i>
            <input type="text" placeholder="Search..." name="query" style="border-radius:10px;">
            </div>
            <button type="submit" name="searchbtn" style="display:none;"><i class="fa fa-search"></i></button>
          </form>
        </div>
</div><br>

<div class="header">
  <h3>Dashboard - Select-to-Delete/View Items </h3>
</div>



<!-- modal end -->

<div class="row">

  <div class="column-content">


  <form class="updelete" method="post">
        <input onclick="return confirm('Are you sure you want to Delete??')" type="submit" name="delete" value="Delete">
        
        <input onclick="return confirm('Are you sure you want to Delete??')" type="submit" name="update" value="Update">
  
    <div class="card">
          
    <center>
     <br><br>
      
        <table border='1'>

            <tr>
                
                <th>Select</th>
                <th style="width:12%">Title</th>
                <th>Category</th>
                <th style="width:10%">Author(s)</th>
                <th>Image</th>
                <th style="width:10%">Some Tags</th>
                <th style="width:18%">Description</th>
                <th style="width:15%">Date</th>
            </tr>
            <?php

if (isset($_GET['searchbtn']) && isset($_GET['query']))
{
  if (empty($_GET['query'])) {
    header("location:".ADMIN_URL."admin_selection.php?no_query");
  }
  $term = $_GET['query'];
  $table = "tbl_stack";
  $search = "title";
  $result = $viewUser->search($term,$table,$search);
  
  $num_result = $result->num_rows;

  if($num_result > 0) {

    if ($num_result > 1)
    {
      $item = "items";
    }
    else {
      $item = "item";
    }

    echo '<h3 style="color:green;">Results: '.$num_result.' '.$item.' "'.$term.'"</h3>';
      while ($row = $result->fetch_assoc()) {

      $id = $row['id'];
      $title = $row['title'];
      $title_desc = $row['title_desc'];
      $some_text = $row['some_text'];
      $desc = $row['description'];
      $image = $row['image'];
      $category = $row['category'];
      $date_created = $row['date_created'];

      // if (strlen($title) > 10)
      // $title = substr($title, 0, 10) . '...';
      
      // if (strlen($title_desc) > 10)
      // $title_desc = substr($title_desc, 0, 10) . '...';
      
      // if (strlen($some_text) > 10)
      // $some_text = substr($some_text, 0, 10) . '...';

      // if (strlen($desc) > 12)
      // $desc = substr($desc, 0, 12) . '...';
          ?>
            <tr>
                <th><input type="checkbox" name="select[]" value="<?php echo $id; ?>"></th>
                <th><input style="font-weight:bold;" type="text" value="<?php echo $title; ?>"></th>
                <th>
                  <select style="font-size:16px;" type="text" value="" name="cat">
                  <option><h5><?php echo $category; ?></h5></option>
                  <?php 
                  $query = "SELECT * FROM tbl_categories ORDER BY id ASC";
                  $res = $viewUser->get_query($query);
                  while ($row = $res->fetch_assoc()) {
                    $title = $row['cat_name'];
                    echo '<option>'.$title.'</option>';
                  }
                  ?> 
                  </select>
                </th>
                <th><input style="font-weight:bold;" type="text" value="<?php echo $title_desc; ?>"></th>
                <th><img src="../<?php echo $image; ?>" style="height:75px;width:150px;"></th>
                <th><input style="font-weight:bold;" type="text" value="<?php echo $some_text; ?>"></th>
                <th><input style="font-weight:bold;" type="text" value="<?php echo $desc; ?>"></th>
                <th><?php echo $date_created; ?></th>
            </tr>
          <?php

      }
  }
  else {
      echo '<h3 style="color:green;">No Records Found </h3> &nbsp';   
      echo '<a href="'.ADMIN_URL.'admin_selection.php"> Go Back </a>'; 
  }
}

// =======================================VIEW ALL=========================================
else {
    $table_name = "tbl_stack";
    $result = $viewUser->get_data($table_name);

    while ($row = $result->fetch_assoc()) {

      $id = $row['id'];
      $title = $row['title'];
      $title_desc = $row['title_desc'];
      $some_text = $row['some_text'];
      $desc = $row['description'];
      $image = $row['image'];
      $category = $row['category'];
      $date_created = $row['date_created'];

      $date_ = $viewUser->datetime($date_created);

      // if (strlen($title) > 10)
      // $title = substr($title, 0, 10) . '...';
      
      // if (strlen($title_desc) > 10)
      // $title_desc = substr($title_desc, 0, 10) . '...';
      
      // if (strlen($some_text) > 10)
      // $some_text = substr($some_text, 0, 10) . '...';

      // if (strlen($desc) > 12)
      // $desc = substr($desc, 0, 12) . '...';
    ?>

            <tr>
                <th><input type="checkbox" name="select[]" value="<?php echo $id; ?>"></th>
                <th><input style="font-weight:bold;" type="text" value="<?php echo $title; ?>" name="title"></th>
                <th>
                  <select style="font-size:16px;" type="text" value="" name="cat">
                  <option><h5><?php echo $category; ?></h5></option>
                  <?php 
                  $query = "SELECT * FROM tbl_categories ORDER BY id ASC";
                  $res = $viewUser->get_query($query);
                  while ($row = $res->fetch_assoc()) {
                    $title = $row['cat_name'];
                    echo '<option>'.$title.'</option>';
                  }
                  ?> 
                  </select>
                </th>
                <th><input style="font-weight:bold;" type="text" value="<?php echo $title_desc; ?>" name="titledesc"></th>
                <th><img src="../<?php echo $image; ?>" style="height:75px;width:150px;"></th>
                <th><input style="font-weight:bold;" type="text" value="<?php echo $some_text; ?>" name="sometext"></th>
                <th><input style="font-weight:bold;" type="text" value="<?php echo $desc; ?>" name="desc"></th>
                <th><?php echo $date_; ?></th>
            </tr>
        
    <?php 
    }
    }
    ?>
    </table>
    </form>
    </center>

    <?php 
      if (isset($_POST['update'])) {
        
        $get_where = array(
          'id' => $_GET['id']
        );

        $update_array2 = array(
          'title'         => $sqlUser->escapeString($_POST['title']),
          'title_desc'    => $sqlUser->escapeString($_POST['titledesc']),
          'some_text'     => $sqlUser->escapeString($_POST['sometext']),
          'description'   => $sqlUser->escapeString($_POST['desc']),
          'category'   => $sqlUser->escapeString($_POST['cat'])
        );
  
        if ($sqlUser->update("tbl_stack", $update_array2, $get_where))
        {
          $get_id = $_GET['id'];
          // $id_get = md5($get_id);
          header("location:".ADMIN_URL."index.php?updated=".$get_id."_no_image_update");
        }
      }
    ?>

    </div>

  </div>

</body>
</html>