<?php

include '../config.php';

include 'ajax/create.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="admin_css/main.css" />
    <script src="../js/jquery-3.3.1.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>

<?php 
include 'require/nav.php';
?>

<div id="top" class="container">
    <br>
<h1>Add Item</h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp <a style="color:#000;text-decoration:none;" href="<?php echo ADMIN_URL.'products.php';?>">Products</a> > Add Items</h4></div>

    <div class="content">
        <div class="row">
            
            <div class="form">
            <form action="" method="post" enctype="multipart/form-data" id="form">
      
      <h4>Select your category : <br><br>
        <select type="text" value="" id="cat" name="cat" required>
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
      <h4><input type="text" name="title_desc" id="title_desc" required></h4>
      
      <?php
    $query = "SELECT * FROM tbl_ecommerce_config WHERE activated = '1'";
    $true = $viewUser->rows($query);

    if ($true) {
    ?>

      <h4>Price :</h4><small style="color:red;" id="price_error"></small>
        <h4><input type="number" id="price" name="price" required></h4>

      <h4>Quantity :</h4><small style="color:red;" id="quantity_error"></small>
        <h4><input type="number" id="quantity" name="quantity" required></h4>

    <?php } ?>

      <!-- <div class="fakeimg" style="height:200px;">200 x 400 pixels Allowed</div><br> -->
      <h4>Upload Image :</h4><small style="color:red;" id="image_error"></small>
      <input type="file" name="image" id="image">
      
      <h4>Some Tags :</h4><small style="color:red;" id="some_text_error"></small>
      <input type="text" name="sometext" id="sometext" required>
      
      <h4>Description :</h4><small style="color:red;" id="desc_error"></small>
      <textarea style="height:100%; width:50%"  rows="10" cols="60" name="desc" id="desc" required></textarea>
      
      <span style="font-weight:bold;font-size:20px;color:green;" class="response"></span>

      <div class="addbtns">
      <!-- <input class="submit" type="submit" name="create" id="addbtn" value="Create"> -->
        <input class="submit" type="submit" name="addbtn" id="addbtn" value="Create">
        <a href="<?php echo ADMIN_URL; ?>products.php" style="text-decoration:none;" name="cancel">Cancel</a>
      </div>

      <!-- <div class="response"></div> -->
    </form>
      </div>
        
                
            
    </div>
    </div>

    
</div>


<!-- <script>
  $(document).ready(function() {
    $("#form").submit(function(event) {
    event.preventDefault();
    var title = $("#title").val();
    var title_desc = $("#title_desc").val();
    var cat = $("#cat").val();
    var price = $("#price").val();
    var quantity = $("#quantity").val();
    var sometext = $("#sometext").val();
    var desc = $("#desc").val();
    var addbtn = $("#addbtn").val();

    $(".response").load("ajax/create.php", {
      title: title,
      title_desc: title_desc,
      cat: cat,
      price: price,
      quantity: quantity,
      sometext: sometext,
      desc: desc,
      addbtn: addbtn,

    }
    );
    });
    });
</script> -->

<!-- <script>

$(document).ready(function(){
  $("#addbtn").click(function(){
    var title = $("#title").val();
    var title_desc = $("#title_desc").val();
    var cat = $("#cat").val();
    var price = $("#price").val();
    var quantity = $("#quantity").val();
    var image = $("#image").val();
    var sometext = $("#sometext").val();
    var desc = $("#desc").val();
// Returns successful data submission message when the entered information is stored in database.
    var dataString = 'title='+ title + '&title_desc='+ title_desc + '&cat='+ cat + '&price='+ price + '&quantity='+ quantity
    + '&image='+ image + '&sometext='+ sometext + '&desc='+ desc;
    console.log(dataString);
    if(title==''||title_desc==''||cat==''||price==''||quantity==''||sometext==''||desc=='');
    {
        $(".response").text("Please input remaining data");
    }
    else
    {
// AJAX Code To Submit Form.
        $.ajax({
        type: "POST",
        url: "<?php echo ADMIN_URL; ?>ajax/create.php",
        data: dataString,
        cache: false,
        success: function(result){
            $(".response").text(result);
    }
});
}
return false;
});
});

</script> -->
    
</body>
</html>