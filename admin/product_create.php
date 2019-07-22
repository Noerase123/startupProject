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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="main.js"></script>
</head>
<body>

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
        <select type="text" value="" id="cat" name="cat">
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
      <h4><input type="text" name="title" id="title" ></h4>
      
      <h4>Author(s) :</h4><small style="color:red;" id="title_desc_error"></small>
      <h4><input type="text" name="titledesc" id="title_desc" ></h4>
      
      <?php
    $query = "SELECT * FROM tbl_ecommerce_config WHERE activated = '1'";
    $true = $viewUser->rows($query);

    if ($true) {
    ?>

      <h4>Price :</h4><small style="color:red;" id="price_error"></small>
        <h4><input type="number" id="price" name="price" ></h4>

      <h4>Quantity :</h4><small style="color:red;" id="quantity_error"></small>
        <h4><input type="number" id="quantity" name="quantity" ></h4>

    <?php } ?>

      <!-- <div class="fakeimg" style="height:200px;">200 x 400 pixels Allowed</div><br> -->
      <h4>Upload Image :</h4><small style="color:red;" id="image_error"></small>
      <input type="file" name="image" id="image">
      
      <h4>Some Tags :</h4><small style="color:red;" id="some_text_error"></small>
      <input type="text" name="sometext" id="sometext" >
      
      <h4>Description :</h4><small style="color:red;" id="desc_error"></small>
      <textarea style="height:100%; width:50%"  rows="10" cols="60" name="desc" id="desc" ></textarea>

      <div class="addbtns">
        <input class="submit" type="submit" name="create" id="addbtn" value="Create">
        <a href="<?php echo ADMIN_URL; ?>index.php" style="text-decoration:none;" name="cancel">Cancel</a>
      </div>
    </form>
      </div>
        
                
            
    </div>
    </div>

    
</div>

<script>

    $('#addbtn').on('click', () => {

        // input value
        $('#cat').val("");
        $('#title').val("");
        $('#title_desc').val("");
        $('#image').val("");
        $('#price').val("");
        $('#quantity').val("");
        $('#sometext').val("");
        $('#desc').val("");
        // input error
        $('#title_error').hide();
        $('#price_error').hide();
        $('#quantity_error').hide();
        $('#image_error').hide();
        $('#some_text_error').hide();
        $('#desc_error').hide();
        
        $('#form').validate({
            rules: {
                title: {
                    required: true;
                },
                title_desc: {
                    required: true;
                },
                price: {
                    required: true;
                },
                quantity: {
                    required: true;
                },
                image: {
                    required: true;
                },
                sometext: {
                    required: true;
                },
                desc: {
                    required: true;
                }
            },
            messages: {
                title: {
                    required: "please fill up the blank";
                },
                title_desc: {
                    required: "please fill up the blank";
                },
                price: {
                    required: "please fill up the blank";
                },
                quantity: {
                    required: "please fill up the blank";
                },
                image: {
                    required: "please fill up the blank";
                },
                sometext: {
                    required: "please fill up the blank";
                },
                desc: {
                    required: "please fill up the blank";
                }
            },
            submitHandler:(label) => {
                $.ajax({
                    type: 'POST',
                    url: "<?php echo ADMIN_URL.'ajax/product_create.php';?>",
                    data: $('#form'),serialize(),
                    success: (data) => {
                        alert("successfully added");
                        window.location.href = '<?php echo ADMIN_URL;?>';
                    }
                });
            }
            
        });
    });

</script>
    
</body>
</html>