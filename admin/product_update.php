<?php

include '../config.php';

$id_id = $_GET['id'];

$table = "tbl_stack";

$id = array(
    'id' => $id_id
);

$res = $viewUser->select_where($table, $id);

foreach ($res as $data) {

    $title = $data['title'];
    $title_desc = $data['title_desc'];
    $some_text = $data['some_text'];
    $desc = $data['description'];
    $image = $data['image'];
    $category = $data['category'];
    $price = $data['price'];
    $quantity = $data['quantity'];
}

include 'ajax/update.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="admin_css/main.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="main.js"></script>
</head>
<body>

<?php 
include 'require/nav.php';
?>

<div class="container">
    <br>
<h1>Update Item</h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp <a style="color:#000;text-decoration:none;" href="<?php echo ADMIN_URL.'products.php';?>">Products</a> 
> <a style="color:#000;text-decoration:none;" href="<?php echo ADMIN_URL.'product_details.php?id='.$id_id;?>"><?php echo $title; ?></a> > Update Items</h4></div>

    <div class="content">
        <div class="row">
            
            <div class="form">
            <span style="font-weight:bold;font-size:20px;color:green;" class="response"></span>
            <form action="" method="post" enctype="multipart/form-data" id="form">
      
      <h4>Select your category : <br><br>
        <select type="text" value="" id="cat" name="cat">
          <option><h5><?php echo $category;?></h5></option>
            <?php 
                $query = "SELECT * FROM tbl_categories ORDER BY id ASC";

                $res = $viewUser->get_query($query);

                while ($row = $res->fetch_assoc()) {

                  $cat = $row['cat_name'];

                  echo '<option>'.$cat.'</option>';
                }
            ?> 
        </select>
      </h4>

      <h4>Title :</h4><small style="color:red;" id="title_error"></small>
      <h4><input type="text" name="title" value="<?php echo $title; ?>" id="title" ></h4>
      
      <h4>Author(s) :</h4><small style="color:red;" id="title_desc_error"></small>
      <h4><input type="text" name="titledesc" value="<?php echo $title_desc; ?>" id="title_desc" ></h4>
      
      <?php
    $query = "SELECT * FROM tbl_ecommerce_config WHERE activated = '1'";
    $true = $viewUser->rows($query);

    if ($true) {
    ?>

      <h4>Price :</h4><small style="color:red;" id="price_error"></small>
        <h4><input type="number" value="<?php echo $price; ?>" id="price" name="price" ></h4>

      <h4>Quantity :</h4><small style="color:red;" id="quantity_error"></small>
        <h4><input type="number" value="<?php echo $quantity; ?>" id="quantity" name="quantity" ></h4>

    <?php } ?>
      
    <img src="../<?php echo $image; ?>" style="width:25%;" alt="">

    <h4>Change Image :</h4><small style="color:red;" id="image_error"></small>
    <input type="file" name="image" id="image">
      
      <h4>Some Tags :</h4><small style="color:red;" id="some_text_error"></small>
      <input type="text" name="sometext" value="<?php echo $some_text; ?>" id="sometext" >
      
      <h4>Description :</h4><small style="color:red;" id="desc_error"></small>
      <textarea style=" width:50%"  rows="10" cols="60" name="desc" id="desc" ><?php echo $desc; ?></textarea>

      <div class="addbtns">
        <input class="submit" type="submit" name="update" id="addbtn" value="Update">
        <a href="<?php echo ADMIN_URL; ?>product_details.php?id=<?php echo $id_id; ?>" style="text-decoration:none;" name="cancel">Cancel</a>
      </div>
    </form>
      </div>
        
                
            
    </div>
    </div>

    
</div>

<script>

    var form = $('#form');
    
    $('#addbtn').on('click', () => {

        form.submit(function(e)) {
        $(this).attr("disabled","disabled");
        e.preventDefault();
            
                $.ajax({
                    type: 'POST',
                    url: "ajax/update.php",
                    data: form.serialize(),
                    success: function(data) {
            
                    $(".response").text(data.content);
                    },
                    error: function(data) {

                    $(".response").text("An error occurred");
                    }
                });
        });
    });

</script>
    
</body>
</html>