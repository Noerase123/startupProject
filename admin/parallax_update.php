<?php

include '../config.php';

$table = 'tbl_parallax';

$id = array(
    'id' => $_GET['id']
);

$res = $viewUser->select_where($table, $id);

foreach ($res as $data) {

    $image = $data['image'];
    $image2 = $data['image2'];
    $image3 = $data['image3'];
}

include 'ajax/update_parallax.php';
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
<h1>Update Parallax</h1>

<?php
include 'require/notif.php';
?>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp Parallax > Update</h4></div>

    <div class="content">
        <div class="row">
            
            <div class="form">
            <span style="font-weight:bold;font-size:20px;color:green;" class="response"></span>
            <form action="" method="post" enctype="multipart/form-data" id="form">


      <h4 style="background-color:#ddd;padding:10px;">Images :</h4><small style="color:red;" id="title_error"></small>
      <h3>1st Image</h3>
      <div><input type="file" name="image1" id="image"></div><br>
      <h3>2nd Image</h3>
      <div><input type="file" name="image2" id="image2"></div><br>
      <h3>3rd Image</h3>
      <div><input type="file" name="image3" id="image3"></div><br>

      <div class="addbtns">
        <input class="submit" type="submit" name="update_parallax" id="addbtn" value="Update">
        <a href="<?php echo ADMIN_URL; ?>parallax.php" style="text-decoration:none;" name="cancel">Cancel</a>
      </div>

      <br>

      <hr>

      <div>
      <span><img src="../<?php echo $image; ?>" style="height:500px; width:100%;" alt=""></span>
      <hr>
      <span><img src="../<?php echo $image2; ?>" style="height:500px; width:100%;" alt=""></span>
      <hr>
      <span><img src="../<?php echo $image3; ?>" style="height:500px; width:100%;" alt=""></span>
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
                    url: "ajax/create.php",
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