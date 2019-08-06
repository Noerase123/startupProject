<?php

include '../config.php';

// include 'ajax/create_cat.php';
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
    <script src="main.js"></script>
</head>
<body>

<?php 
include 'require/nav.php';
?>

<div class="container">
    <br>
<h1>Add Items</h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp Product Category > Add Items</h4></div>

    <div class="content">
        <div class="row">
            
            <div class="form">
            <span style="font-weight:bold;font-size:20px;color:green;" class="response"></span>
            <form action="" method="post" enctype="multipart/form-data" id="form">
      <h4>Category Select :</h4><small style="color:red;" id="title_error"></small>

      <?php
        $qry = "SELECT * FROM tbl_top_categories";
        $res = $viewUser->get_query($qry);
        
      ?>
      <h4><select style="width:50%;padding:10px;" name="top_cat" id="top_cat">
      <option value="">Select Category</option>
      <?php
        foreach($res as $row) {
            ?>
            <option value="<?php echo $row['top_name'];?>"><?php echo $row['top_name'];?></option> 
            <?php
        }
      ?>
              
        </select></h4>

      <h4>Category Name :</h4><small style="color:red;" id="title_error"></small>
      <h4><input type="text" name="cat_name" id="cat_name" ></h4>
      
      
      <div class="addbtns">
        <input class="submit" type="submit" name="create" id="create" value="Create">
        <a href="<?php echo ADMIN_URL; ?>product_category.php" style="text-decoration:none;" name="cancel">Cancel</a>
      </div>
    </form>
        
      </div>
            
    </div>
    </div>

    
</div>


<script>

    $(document).ready(function() {
        $("#form").submit(function(e) {
            e.preventDefault();
        var cat_name = $("#cat_name").val();
        var top_cat = $("#top_cat").val();
        var btn = $("#create").val();
        
        $(".response").load("<?php echo ADMIN_URL; ?>ajax/create_cat.php",
        {
            top_cat: top_cat,
            cat_name: cat_name,
            addbtn: btn
        });
        });
    });


    // var form = $('#form');
    
    // $('#addbtn').on('click', () => {

    //     form.submit(function(e)) {
    //     $(this).attr("disabled","disabled");
    //     e.preventDefault();
            
    //             $.ajax({
    //                 type: 'POST',
    //                 url: "ajax/create.php",
    //                 data: form.serialize(),
    //                 success: function(data) {
            
    //                 $(".response").text(data.content);
    //                 },
    //                 error: function(data) {

    //                 $(".response").text("An error occurred");
    //                 }
    //             });
    //     });
    // });

</script>
    
</body>
</html>