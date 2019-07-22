<?php

include '../config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="admin_css/main.css" />
    <script src="main.js"></script>
</head>
<body>

<div class="header">
    <p>Welcome to Admin</p>
    <div class="head-content">
        <p>admin</p>
        <p>settings</p>
    </div>
</div>

<?php 
include 'require/nav.php';
?>

<div class="container">
    <br>
<h1>Add Item</h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp Products > Add Items</h4></div>

    <div class="content">
        <div class="row">
            
            <div class="form">
            <form action="" method="post" enctype="multipart/form-data" id="form">
      
      <h4>Select your category : <br><br>
        <select type="text" value="" name="cat">
          <option><h5>Select category</h5></option>
            <?php 
                $query = "SELECT * FROM tbl_categories ORDER BY id ASC";

                $res = $viewUser->get_query($query);

                while ($row = $res->fetch_assoc()) {

                  $dataArray[] = $row;

                  $title = $row['cat_name'];

                  echo '<option>'.$title.'</option>';
                }
            ?> 
        </select>
      </h4>

      <h4>Title :</h4><small style="color:red;" id="title_error"></small>
      <h4><input type="text" name="title" id="title" required></h4>
      
      <h4>Author(s) :</h4><small style="color:red;" id="title_desc_error"></small>
      <h4><input type="text" name="titledesc" id="title_desc" required></h4>
      
      <?php
    $query = "SELECT * FROM tbl_ecommerce_config WHERE activated = '1'";
    $true = $viewUser->rows($query);

    if ($true) {
    ?>

      <h4>Price :</h4>
        <h4><input type="number" name="price" required></h4>

      <h4>Quantity :</h4>
        <h4><input type="number" name="quantity" required></h4>

    <?php } ?>

      <!-- <div class="fakeimg" style="height:200px;">200 x 400 pixels Allowed</div><br> -->
      <h4>Upload Image :</h4><small style="color:red;" id="image_error"></small>
      <input type="file" name="image" id="image">
      
      <h4>Some Tags :</h4><small style="color:red;" id="some_text_error"></small>
      <input type="text" name="sometext" id="sometext" required>
      
      <h4>Description :</h4><small style="color:red;" id="desc_error"></small>
      <textarea style="height:100%; width:50%"  rows="10" cols="60" name="desc" id="desc" required></textarea>

      <div style="">
        <input class="submit" type="submit" name="create" value="Create">
        <a href="<?php echo ADMIN_URL; ?>index.php"  name="cancel">Cancel</a>
      </div>
    </form>
            </div>
        
                
            
    </div>
    </div>

    
</div>
    
</body>
</html>