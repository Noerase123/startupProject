<?php

include '../config.php';

    $success_message = '';

  if (isset($_POST['create_cat']))
  {
    $enabled = 1;

    $insert_array = array(
      'cat_name'         => mysqli_real_escape_string($sql->conn, $_POST['cat_name']),
      'activated'         => mysqli_real_escape_string($sql->conn, $enabled)
    );

    if ($sqlUser->create("tbl_categories", $insert_array))
    {
      header("location:".ADMIN_URL."index.php?category_created=add_category");
    }
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
    <link rel="stylesheet" type="text/css" media="screen" href="../css/admin.css" />
    <script src="main.js"></script>
    <script src="jquery-3.4.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php
include '../require/admin_navbar.php';
?>

<div class="header">
  <h3>Dashboard - Add Category</h3>
</div>

<!-- modal end -->

<div class="row">

  <div class="homecolumn create">
  
  <br>
  <div class="header">
  <h3  class="header-info" style="color:green"><?php
      echo 'Create a Category';
  ?></h3>
  </div>

    <div class="item">

    <form action="" method="post" enctype="multipart/form-data" id="form">

      <h4>Category Name :</h4>
      <h4><input type="text" name="cat_name" id="title" required></h4>
    
      <a href="index.php" style="float:right;" name="cancel">Cancel</a>
      
      <input class="submit" type="submit" style="float:right" name="create_cat" value="Create" id="create">

    </form>

    
    
    
    </div>
    
  </div>
  
</body>
</html>