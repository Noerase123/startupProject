<?php

include '../config.php';

    $success_message = '';

  if (isset($_POST['create']))
  {
        $v1 = rand(1111,9999);
        $v2 = rand(1111,9999);

        $v3 = $v1.$v2;
        $v3 = md5($v3);
        $fnm= $_FILES["image"]["name"];
        $dst= "../uploads/".$v3.$fnm;
        $image= "uploads/".$v3.$fnm;
        move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

    $insert_array = array(
      'title'         => $sqlUser->escapeString($_POST['title']),
      'title_desc'    => $sqlUser->escapeString($_POST['titledesc']),
      'image'         => $sqlUser->escapeString($image),
      'some_text'     => $sqlUser->escapeString($_POST['sometext']),
      'description'   => $sqlUser->escapeString($_POST['desc']),
      'category'      => $sqlUser->escapeString($_POST['cat']),
      'price'         => $sqlUser->escapeString($_POST['price']),
      'quantity'      => $sqlUser->escapeString($_POST['quantity'])
    );

    if ($sqlUser->create("tbl_stack", $insert_array))
    {
      header("location:".ADMIN_URL."index.php?created=1");
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
  <h3>Dashboard - Add Item</h3>
</div>

<!-- modal end -->

<div class="row">
  <div class="homecolumn create">
  
  <br>
  <div class="header">
  <h3 class="header-info" style="color:green;">Create your data.</h3>
  </div>

    <div class="item">

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

      <p><span style="margin-right:300px;">Price :</span><span>Quantity :</span></p>
      <p>
        <input type="number" name="price" style="width:40%;padding:8px;font-size:15px;margin-right:80px;" id="title_desc" required>
        <input type="number" name="quantity" style="width:40%;padding:8px;font-size:15px;" id="title_desc" required>
      </p>

    <?php } ?>

      <!-- <div class="fakeimg" style="height:200px;">200 x 400 pixels Allowed</div><br> -->
      <h4>Upload Image :</h4><small style="color:red;" id="image_error"></small>
      <input type="file" name="image" id="image">
      
      <h4>Some Tags :</h4><small style="color:red;" id="some_text_error"></small>
      <input type="text" name="sometext" id="sometext" required>
      
      <h4>Description :</h4><small style="color:red;" id="desc_error"></small>
      <textarea style="height:100%; width:100%"  rows="10" cols="60" name="desc" id="desc" required></textarea>

      <div style="float:right;">
        <input class="submit" type="submit" name="create" value="Create">
        <a href="<?php echo ADMIN_URL; ?>index.php"  name="cancel">Cancel</a>
      </div>
    </form>
    
    </div>
    
  </div>

  <!-- <script type="text/javascript">
    $(function()) {

      var form = $('#form');

      form.submit(function(e)) {
        $(this).attr("disabled","disabled");
        e.preventDefault();

        $.ajax({
          type: form.attr("method"),
          url: form.attr("action"),
          data: form.serialize(),
          dataType: "json",
          success: function(data) {
            
            $(".response").text(data.content);
          },
          error: function(data) {

            $(".response").text("An error occurred");
          }
        });
      }
    }
  </script> -->
  
</body>
</html>